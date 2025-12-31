<?php namespace Briddle\Data\Controllers;

use BackendMenu;
use System\Models\File;
use System\Classes\SettingsManager;
use Request;
use Input;
use System\Models\File as FileModel;
use October\Rain\Support\Facades\Flash;
use Lang;
use Schema;
use Db;
use Event;
use Illuminate\Support\Str;
use Briddle\Data\Models\Settings;//Settings::get('table');

class Import extends \Backend\Classes\Controller {

    public $requiredPermissions = [
        'briddle.data.import'
    ];
    public $exptable;
    public $tmp;
    public $replace;
    public $collection;

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Briddle.Data', 'data');
        //BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Briddle.Data', 'settings');
        $this->pageTitle = Lang::get('briddle.data::lang.plugin.name');
        $this->bodyClass = 'compact-container';
        $this->tmp = 'san_san_packages' . Settings::get('suffix');
        $this->exptable = 'san_san_destinations' . Settings::get('suffix');
    }

    public function index() {
        $this->vars['suffix'] = Settings::get('suffix');
        //$this->vars['script'] = Settings::get('script');
        $this->vars['exptable'] = $this->exptable;
        $this->vars['tmp'] = $this->tmp;

        // Get column names
        if (Schema::hasTable($this->tmp)) {
            $this->vars['columns'] = Schema::getColumnListing($this->tmp);
            $this->vars['rows'] = Db::table($this->tmp)->count();
        } else {
            $this->vars['columns'] = array();
            $this->vars['rows'] = 0;
        }
        // if (Schema::hasTable($this->exptable)) {
        //     $this->vars['columns'] = Schema::getColumnListing($this->exptable);
        //     $this->vars['rows'] = Db::table($this->exptable)->count();
        // } else {
        //     $this->vars['columns'] = array();
        //     $this->vars['rows'] = 0;
        // }
    }

    public function onImport()
    {
        $this->replace = Input::get('replace');

        
        if (Input::hasFile('import'))
        {
            if (Input::file('import')->isValid())
            {
                $name = Input::file('import')->getClientOriginalName();
                $extension = Input::file('import')->getClientOriginalExtension();
                $mime = Input::file('import')->getMimeType();

                // Only allow valid UTF-8 encoded CSV document (.csv) using a comma as the seperator and a double quote as a delimiter.
                // The first row contains the keys to use (0 indexed)
                if($extension=='csv')
                {
                    if (($handle = fopen(Input::file('import'), "r")) !== FALSE) {
                        $row = 0;
                        while (($data = fgetcsv($handle, 5000, ",",'"')) !== FALSE) {
                            if($row > 1) {
                                
                                // Experience data
                                if($data[19] != ""){
                                    $exp_banner_data_final = null;
                                    $exp_banner_type = iconv('Windows-1252', 'UTF-8', urldecode($data[13]));
                                    if($data[13] == 'Image'){
                                    }else{
                                        $exp_video_url = iconv('Windows-1252', 'UTF-8', urldecode($data[15]));
                                        $exp_video_duration = iconv('Windows-1252', 'UTF-8', urldecode($data[16]));
                                        $exp_banner_data['iframe'] = $exp_video_url;
                                        $exp_banner_data['video_duration'] = $exp_video_duration;
                                        $exp_banner_data1[] = $exp_banner_data;
                                        $exp_banner_data = [];
                                        $exp_banner_data_final = json_encode($exp_banner_data1);
                                        $exp_banner_data1 = [];
                                    }
                                    $exp_title = iconv('Windows-1252', 'UTF-8', urldecode($data[2]));
                                    $exp_home_slider_title = iconv('Windows-1252', 'UTF-8', urldecode($data[4]));
                                    $exp_main_slider_title = iconv('Windows-1252', 'UTF-8', urldecode($data[5]));
                                    $exp_sub_title = iconv('Windows-1252', 'UTF-8', urldecode($data[6]));
                                    if($data[7] == 'ON'){
                                        $exp_status = 1;
                                    }else{
                                        $exp_status = 0;
                                    }
                                    if($data[8] == 'NO'){
                                        $exp_is_featured = 0;
                                    }else{
                                        $exp_is_featured = 1;
                                    }
                                    $exp_description = iconv('Windows-1252', 'UTF-8', urldecode($data[17]));
                                    $exp_slug = Str::slug($data[3]);
                                    $exp_d_id = iconv('Windows-1252', 'UTF-8', urldecode($data[19]));
                                    $expData = [
                                            'd_id' => $exp_d_id,
                                            'title' => $exp_title,
                                            'slug' => $exp_slug,
                                            'sub_title' => $exp_sub_title,
                                            'status' =>  $exp_status,
                                            'home_slider_title' => $exp_home_slider_title,
                                            'main_slider_title' => $exp_main_slider_title,
                                            'sort_order' => $row,
                                            'banner_type' => $exp_banner_type,
                                            'banner_iframe' => $exp_banner_data_final,
                                            'is_featured' => $exp_is_featured,
                                            'content' =>   $exp_description,
                                            'created_at' => date('Y-m-d h:i:s'),
                                            'updated_at' =>  date('Y-m-d h:i:s'),
                                    ];
                                  
                                    $experience = Db::table('san_san_destinations')->where('d_id', $exp_d_id)->first();
                                    if(empty($experience)){
                                        Db::table('san_san_destinations')->insert($expData);
                                        $exp_id = Db::getPdo()->lastInsertId();
                                    }else{
                                        Db::table('san_san_destinations')->where('id', $experience->id)->update($expData);
                                        $exp_id = $experience->id;
                                    }

                                    if($exp_id){
                                        $temp_img_url = url('storage/app/media/tempimg')."/";
                                        $chk_img_url = $_SERVER['DOCUMENT_ROOT']."/storage/app/media/tempimg/";
                                        $d_bannerfile = $chk_img_url.$data[9];
                                        if (is_file($d_bannerfile)) {
                                            $files_sys = new File;
                                            $d_banner = $files_sys->fromUrl($temp_img_url.$data[9]);
                                            $d_banner->is_public = true;
                                            $d_banner->field = 'banner';
                                            $d_banner->attachment_id = $exp_id;
                                            $d_banner->attachment_type = 'san\San\Models\Destinations';
                                            $d_banner->save();
                                        }

                                        $d_imagefile = $chk_img_url.$data[10];
                                        if (is_file($d_imagefile)) {
                                            $files_sys = new File;
                                            $d_image = $files_sys->fromUrl($temp_img_url.$data[10]);
                                            $d_image->is_public = true;
                                            $d_image->field = 'image';
                                            $d_image->attachment_id = $exp_id;
                                            $d_image->attachment_type = 'san\San\Models\Destinations';
                                            $d_image->save();
                                        }
                                        
                                        $d_thumbnailfile = $chk_img_url.$data[11];
                                        if (is_file($d_thumbnailfile)) {
                                            $files_sys = new File;
                                            $d_thumbnail = $files_sys->fromUrl($temp_img_url.$data[11]);
                                            $d_thumbnail->is_public = true;
                                            $d_thumbnail->field = 'thumbnail';
                                            $d_thumbnail->attachment_id = $exp_id;
                                            $d_thumbnail->attachment_type = 'san\San\Models\Destinations';
                                            $d_thumbnail->save();
                                        }
                                        
                                        $d_holidays_thumbnailfile = $chk_img_url.$data[12];
                                        if (is_file($d_holidays_thumbnailfile)) {
                                            $files_sys = new File;
                                            $d_holidays_thumbnail = $files_sys->fromUrl($temp_img_url.$data[12]);
                                            $d_holidays_thumbnail->is_public = true;
                                            $d_holidays_thumbnail->field = 'holidays_thumbnail';
                                            $d_holidays_thumbnail->attachment_id = $exp_id;
                                            $d_holidays_thumbnail->attachment_type = 'san\San\Models\Destinations';
                                            $d_holidays_thumbnail->save();
                                        }                                        
                                        if($data[13] == 'Image'){
                                            $banner_images_data = explode(',', $data[14]);
                                            $old_imgs = Db::table('system_files')->where('attachment_id', $exp_id)->where('field', 'banner_image')->get();
                                            if(count($old_imgs) > 0 ){
                                                foreach ($old_imgs as $key => $oldimgs) {
                                                    $file_name = str_replace(".jpeg", ".jpg",$oldimgs->file_name);
                                                    if (!in_array($file_name, $banner_images_data)) {
                                                        $d_banner_imagefile = $chk_img_url.$data[14];
                                                        if (is_file($d_banner_imagefile)) {
                                                            $files_sys = new File;
                                                            $d_banner_image = $files_sys->fromUrl($temp_img_url.$data[14]);
                                                            $d_banner_image->is_public = true;
                                                            $d_banner_image->field = 'banner_image';
                                                            $d_banner_image->attachment_id = $exp_id;
                                                            $d_banner_image->attachment_type = 'san\San\Models\Destinations';
                                                            $d_banner_image->save();
                                                        }
                                                    }
                                                }
                                            } else {
                                                $d_banner_imagefile = $chk_img_url.$data[14];
                                                if (is_file($d_banner_imagefile)) {
                                                    $files_sys = new File;
                                                    $d_banner_image = $files_sys->fromUrl($temp_img_url.$data[14]);
                                                    $d_banner_image->is_public = true;
                                                    $d_banner_image->field = 'banner_image';
                                                    $d_banner_image->attachment_id = $exp_id;
                                                    $d_banner_image->attachment_type = 'san\San\Models\Destinations';
                                                    $d_banner_image->save();
                                                }
                                            }
                                        }
                                    }
                                    $expData = array();
                                }

                                // Package data
                                if($data[20] != ""){
                                    // $project_description    = iconv('Windows-1252', 'UTF-8', urldecode($data[17]));
                                    $project_description    = iconv('Windows-1252', 'UTF-8', urldecode($data[49]));
                                    $project_banner_title   = iconv('Windows-1252', 'UTF-8', urldecode($data[21]));
                                    $project_title          = iconv('Windows-1252', 'UTF-8', urldecode($data[22]));
                                    $project_sub_title      = iconv('Windows-1252', 'UTF-8', urldecode($data[23]));
                                    $project_content        = iconv('Windows-1252', 'UTF-8', urldecode($data[24]));
                                    $project_caption        = iconv('Windows-1252', 'UTF-8', urldecode($data[25]));
                                    $project_sub_caption    = iconv('Windows-1252', 'UTF-8', urldecode($data[26]));
                                    $project_countires = array();
                                    $project_countiresfld = iconv('Windows-1252', 'UTF-8', urldecode($data[27]));
                                    $project_countiresArray = explode(',', $project_countiresfld);
                                    if(!empty($project_countiresArray)){
                                        foreach($project_countiresArray as $x => $countiry){
                                            $project_countires[$x] = array(
                                                'country' => $countiry
                                            );
                                        }
                                        $project_countires = json_encode($project_countires);
                                    }else{
                                        $project_countires = '';
                                    }

                                    $project_cities = array();
                                    $project_citiesfld = iconv('Windows-1252', 'UTF-8', urldecode($data[28]));
                                    $project_citiesArray = explode(',', $project_citiesfld);
                                    if(!empty($project_citiesArray)){
                                        foreach($project_citiesArray as $x => $city){
                                            $project_cities[$x] = array(
                                                'city' => $city
                                            );
                                        }
                                        $project_cities = json_encode($project_cities);
                                    }else{
                                        $project_cities = '';
                                    }


                                    $slug = str_replace('http://www.itlworld.com/package/','',$data[29]);
                                    $slug = Str::slug($slug);
                                    if($data[30] == 'ON'){
                                        $project_status = 1;
                                    }else{
                                        $project_status = 0;
                                    }

                                    if($data[31] == 'YES'){
                                        $on_holiday = 1;
                                    }else{
                                        $on_holiday = 0;
                                    }
                                    $on_holiday_page = $on_holiday;
                                    
                                    $holiday_tag = iconv('Windows-1252', 'UTF-8', urldecode($data[32]));
                                    $unique_caption = iconv('Windows-1252', 'UTF-8', urldecode($data[33]));

                                    $months = [];
                                    if($data[46]=='Yes'){
                                        $months[] = 'January';
                                        $months[] = 'February';
                                        $months[] = 'March';
                                        $months[] = 'April';
                                        $months[] = 'May';
                                        $months[] = 'Jun';
                                        $months[] = 'July';
                                        $months[] = 'August';
                                        $months[] = 'September';
                                        $months[] = 'October';
                                        $months[] = 'November';
                                        $months[] = 'December';
                                    }else{
                                        if($data[34]=='Yes'){
                                            $months[] = 'January';
                                        }
                                        if($data[35]=='Yes'){
                                            $months[] = 'February';
                                        }
                                        if($data[36]=='Yes'){
                                            $months[] = 'March';
                                        }
                                        if($data[37]=='Yes'){
                                            $months[] = 'April';
                                        }
                                        if($data[38]=='Yes'){
                                            $months[] = 'May';
                                        }
                                        if($data[39]=='Yes'){
                                            $months[] = 'Jun';
                                        }
                                        if($data[40]=='Yes'){
                                            $months[] = 'July';
                                        }
                                        if($data[41]=='Yes'){
                                            $months[] = 'August';
                                        }
                                        if($data[42]=='Yes'){
                                            $months[] = 'September';
                                        }
                                        if($data[43]=='Yes'){
                                            $months[] = 'October';
                                        }
                                        if($data[44]=='Yes'){
                                            $months[] = 'November';
                                        }
                                        if($data[45]=='Yes'){
                                            $months[] = 'December';
                                        }
                                    }

                                    if(count($months) > 0 ){
                                        $months = json_encode($months);
                                    }else{
                                        $months = '';
                                    }
                                    
                                    $conditions = iconv('Windows-1252', 'UTF-8', urldecode($data[51]));
                                    $inclusions = array();
                                    $inclusionsfld = iconv('Windows-1252', 'UTF-8', urldecode($data[52]));
                                    $inclusionsArray = explode(',', $inclusionsfld);
                                    if(!empty($inclusionsArray)){
                                        foreach($inclusionsArray as $x => $inclusion){
                                            $inclusions[$x] = array(
                                                'point' => $inclusion
                                            );
                                        }
                                        $inclusions = json_encode($inclusions);
                                    }else{
                                        $inclusions = '';
                                    }
                                    
                                    $exclusions = array();
                                    $exclusionsfld = iconv('Windows-1252', 'UTF-8', urldecode($data[53]));
                                    $exclusionsArray = explode(',', $exclusionsfld);
                                    if(!empty($exclusionsArray)){
                                        foreach($exclusionsArray as $x => $exclusion){
                                            $exclusions[$x] = array(
                                                'point' => $exclusion
                                            );
                                        }
                                        $exclusions = json_encode($exclusions);
                                    }else{
                                        $exclusions = '';
                                    }
                                    
                                    if($data[55]=='Yes'){
                                        $hotel_stay = 1;
                                    }else{
                                        $hotel_stay = 0;
                                    }
                                    if($data[56]=='Yes'){
                                        $domestic_flights = 1;
                                    }else{
                                        $domestic_flights = 0;
                                    }
                                    if($data[57]=='Yes'){
                                        $breakfast_meals = 1;
                                    }else{
                                        $breakfast_meals = 0;
                                    }
                                    if($data[58]=='Yes'){
                                        $airport_transfers = 1;
                                    }else{
                                        $airport_transfers = 0;
                                    }
                                    if($data[59]=='Yes'){
                                        $site_seeing = 1;
                                    }else{
                                        $site_seeing = 0;
                                    }
                                    if($data[60]=='Yes'){
                                        $city_coach_tour = 1;
                                    }else{
                                        $city_coach_tour = 0;
                                    }
                                    if($data[61]=='Yes'){
                                        $tour_guide = 1;
                                    }else{
                                        $tour_guide = 0;
                                    }
                                    if($data[62]=='Yes'){
                                        $train_tickets = 1;
                                    }else{
                                        $train_tickets = 0;
                                    }
                                    if($data[63]=='Yes'){
                                        $entrance_fee_pass = 1;
                                    }else{
                                        $entrance_fee_pass = 0;
                                    }
                                    if($data[64]=='Yes'){
                                        $cruising = 1;
                                    }else{
                                        $cruising = 0;
                                    }
                                    if($data[65]=='Yes'){
                                        $entertainment = 1;
                                    }else{
                                        $entertainment = 0;
                                    }
                                    if($data[66]=='Yes'){
                                        $sailing = 1;
                                    }else{
                                        $sailing = 0;
                                    }
                                    if($data[67]=='Yes'){
                                        $hiking_walking_tour = 1;
                                    }else{
                                        $hiking_walking_tour = 0;
                                    }
                                    if($data[68]=='Yes'){
                                        $speed_boat = 1;
                                    }else{
                                        $speed_boat = 0;
                                    }
                                    if($data[69]=='Yes'){
                                        $wellness = 1;
                                    }else{
                                        $wellness = 0;
                                    }
                                    if($data[70]=='Yes'){
                                        $camping = 1;
                                    }else{
                                        $camping = 0;
                                    }
                                    if($data[71]=='Yes'){
                                        $canyoning = 1;
                                    }else{
                                        $canyoning = 0;
                                    }
                                    if($data[72]=='Yes'){
                                        $campervan = 1;
                                    }else{
                                        $campervan = 0;
                                    }
                                    if($data[73]=='Yes'){
                                        $para_gliding = 1;
                                    }else{
                                        $para_gliding = 0;
                                    }
                                    if($data[74]=='Yes'){
                                        $bike_ride = 1;
                                    }else{
                                        $bike_ride = 0;
                                    }
                                    if($data[75]=='Yes'){
                                        $diving = 1;
                                    }else{
                                        $diving = 0;
                                    }
                                    if($data[76]=='Yes'){
                                        $scooter_ride = 1;
                                    }else{
                                        $scooter_ride = 0;
                                    }
                                    if($data[77]=='Yes'){
                                        $zip_line = 1;
                                    }else{
                                        $zip_line = 0;
                                    }
                                    if($data[78]=='Yes'){
                                        $horse_ride = 1;
                                    }else{
                                        $horse_ride = 0;
                                    }
                                    if($data[79]=='Yes'){
                                        $cooking_class = 1;
                                    }else{
                                        $cooking_class = 0;
                                    }
                                    if($data[80]=='Yes'){
                                        $shopping_tour = 1;
                                    }else{
                                        $shopping_tour = 0;
                                    }
                                
                                    $nights = iconv('Windows-1252', 'UTF-8', urldecode($data[81]));
                                    $days = iconv('Windows-1252', 'UTF-8', urldecode($data[82]));
                                    $nearest_airpor = iconv('Windows-1252', 'UTF-8', urldecode($data[83]));

                                    $price = [];

                                    if( $data[84] != ''){
                                        $price[] = array(
                                            'price' => $data[84],
                                            'currency' => 'usd',
                                        );
                                    }
                                    if( $data[85] != ''){
                                        $price[] = array(
                                            'price' => $data[85],
                                            'currency' => 'aed',
                                        );
                                    }
                                    if( $data[86] != ''){
                                        $price[] = array(
                                            'price' => $data[86],
                                            'currency' => 'sar',
                                        );
                                    }
                                    if( $data[87] != ''){
                                        $price[] = array(
                                            'price' => $data[87],
                                            'currency' => 'qar',
                                        );
                                    }
                                    if( $data[88] != ''){
                                        $price[] = array(
                                            'price' => $data[88],
                                            'currency' => 'kwd',
                                        );
                                    }
                                    if( $data[89] != ''){
                                        $price[] = array(
                                            'price' => $data[89],
                                            'currency' => 'omr',
                                        );
                                    }
                                    if( $data[90] != ''){
                                        $price[] = array(
                                            'price' => $data[90],
                                            'currency' => 'bhd',
                                        );
                                    }
                                    $price = json_encode($price);

                                    $fromd = explode(",", $data[91]);
                                    if (isset($data[92])) {
                                            $tod = explode(",", $data[92]);
                                        } else {
                                            $tod = []; // You can set this to an empty array or handle this case however you need
                                        }

                                    $pdate = array();
                                    $pdates = array();
                                    foreach($fromd as $d => $from){
                                        $date_f = $from.', '.date("Y");
                                        if (isset($tod[$d])) {
                                            $date_t = $tod[$d] . ', ' . date("Y");
                                        } else {
                                            // Handle the case where the index is not available
                                            $date_t = ''; // You can set a default value or handle the error as needed
                                        }
                                        $pdate['from'] = date("d-m-Y", strtotime($date_f));
                                        $pdate['to'] = date("d-m-Y", strtotime($date_t));
                                        $pdates[] = $pdate;
                                    }
                                    $pdates_final = json_encode($pdates);

                                    $nearest_airport = array();
                                    $nearest_airportfld = iconv('Windows-1252', 'UTF-8', urldecode($data[83]));
                                    $nearest_airportArray = explode(',', $nearest_airportfld);
                                    if(!empty($nearest_airportArray)){
                                        foreach($nearest_airportArray as $x => $airport){
                                            $nearest_airport[$x] = array(
                                                'airport' => $airport
                                            );
                                        }
                                        $nearest_airport = json_encode($nearest_airport);
                                    }else{
                                        $nearest_airport = '';
                                    }
                                    $itineraries = array();
                                    $itinerariesfld = isset($data[94]) ? iconv('Windows-1252', 'UTF-8', urldecode($data[94])) : '';
                                    $itinerariesArray = explode('>', $itinerariesfld);
                                    if(!empty($itinerariesArray)){
                                        foreach($itinerariesArray as $x => $itinerary){
                                            $itinerary = explode('#',$itinerary);
                                            $itineraries[$x] = array(
                                                'title' => isset($itinerary[0]) ? $itinerary[0] : '',
                                                'desc' => isset($itinerary[1]) ? $itinerary[1] : ''
                                            );
                                        }
                                        $itineraries = json_encode($itineraries);
                                    }else{
                                        $itineraries ='';
                                    }
                                    $pkg_data = [
                                        'p_id' => $data[20],
                                        'title' => $project_banner_title,
                                        'caption' => $project_title,
                                        'slug' => $slug,
                                        'sub_title' => $project_sub_caption,
                                        'caption_new' =>$project_caption,
                                        'sub_caption' =>  $project_sub_title,
                                        'sort_order' => $row,
                                        'brief' => $project_content,
                                        'content' => $project_description,
                                        'countries' => $project_countires,
                                        'cities' => $project_cities,
                                        'status' => $project_status,
                                        'on_holiday_page' => $on_holiday_page,
                                        'holiday_tag' => $holiday_tag,
                                        'days' => $days,
                                        'night' => $nights,
                                        'unique_caption' => $unique_caption,
                                        'months' => $months,
                                        'conditions' => $conditions,
                                        'inclusions' => $inclusions,
                                        'exclusions' => $exclusions,
                                        'hotel_stay' => $hotel_stay,
                                        'domestic_flights' => $domestic_flights,
                                        'breakfast_meals' => $breakfast_meals,
                                        'airport_transfers' => $airport_transfers,
                                        'site_seeing' => $site_seeing,
                                        'city_coach_tour' => $city_coach_tour,
                                        'tour_guide' => $tour_guide,
                                        'train_tickets' => $train_tickets,
                                        'entrance_fee_pass' => $entrance_fee_pass,
                                        'cruising' => $cruising,
                                        'entertainment' => $entertainment,
                                        'sailing' => $sailing,
                                        'hiking_walking_tour' => $hiking_walking_tour,
                                        'speed_boat' => $speed_boat,
                                        'wellness' => $wellness,
                                        'camping' => $camping,
                                        'canyoning' => $canyoning,
                                        'campervan' => $campervan,
                                        'para_gliding' => $para_gliding,
                                        'bike_ride' => $bike_ride,
                                        'diving' => $diving,
                                        'scooter_ride' => $scooter_ride,
                                        'zip_line' => $zip_line,
                                        'horse_ride' => $horse_ride,
                                        'cooking_class' => $cooking_class,
                                        'shopping_tour' => $shopping_tour,
                                        'price' => $price,
                                        'dates' => $pdates_final,
                                        'nearest_airport' => $nearest_airport,
                                        'itineraries' => $itineraries,
                                        'theme_id' => 1,
                                        'created_at' => date('Y-m-d h:i:s'),
                                        'updated_at' =>  date('Y-m-d h:i:s'),
                                    ];
                                    $pack_p_id = $data[20];
                                    $old_package = Db::table('san_san_packages')->where('p_id', $pack_p_id)->first();
                                    if(empty($old_package)){
                                        Db::table('san_san_packages')->insert($pkg_data);
                                        $pack_id = Db::getPdo()->lastInsertId();
                                        if($pack_id){
                                            $result = Db::table('destinations_packages')->insert([
                                                    'packages_id' => $pack_id,
                                                    'destinations_id' => $exp_id,
                                            ]);
                                        }
                                    }else{
                                        Db::table('san_san_packages')->where('id', $old_package->id)->update($pkg_data);
                                        $pack_id = $old_package->id;
                                    }
                                    if($pack_id){
                                        $temp_img_url = url('storage/app/media/tempimg')."/";
                                        $chk_img_url = $_SERVER['DOCUMENT_ROOT']."/storage/app/media/tempimg/";

                                        $p_bannerfile = $chk_img_url.$data[47];
                                        if (is_file($p_bannerfile)) {
                                            $files_sys = new File;
                                            $p_banner = $files_sys->fromUrl($temp_img_url.$data[47]);
                                            $p_banner->is_public = true;
                                            $p_banner->field = 'banner';
                                            $p_banner->attachment_id = $pack_id;
                                            $p_banner->attachment_type = 'san\San\Models\Packages';
                                            $p_banner->save();
                                        }
                                        $d_thumbnailfile = $chk_img_url.$data[48];
                                        if (is_file($d_thumbnailfile)) {
                                            $files_sys = new File;
                                            $d_thumbnail = $files_sys->fromUrl($temp_img_url.$data[48]);
                                            $d_thumbnail->is_public = true;
                                            $d_thumbnail->field = 'thumbnail';
                                            $d_thumbnail->attachment_id = $pack_id;
                                            $d_thumbnail->attachment_type = 'san\San\Models\Packages';
                                            $d_thumbnail->save();
                                        }
                                        $d_overview_imagefile = $chk_img_url.$data[50];
                                        if (is_file($d_overview_imagefile)) {
                                            $files_sys = new File;
                                            $d_overview = $files_sys->fromUrl($temp_img_url.$data[50]);
                                            $d_overview->is_public = true;
                                            $d_overview->field = 'overview_image';
                                            $d_overview->attachment_id = $pack_id;
                                            $d_overview->attachment_type = 'san\San\Models\Packages';
                                            $d_overview->save();
                                        }
                                        $inclusions_imagefile = $chk_img_url.$data[54];
                                        if (is_file($inclusions_imagefile)) {
                                            $files_sys = new File;
                                            $d_inclusions_image = $files_sys->fromUrl($temp_img_url.$data[54]);
                                            $d_inclusions_image->is_public = true;
                                            $d_inclusions_image->field = 'inclusions_image';
                                            $d_inclusions_image->attachment_id = $pack_id;
                                            $d_inclusions_image->attachment_type = 'san\San\Models\Packages';
                                            $d_inclusions_image->save();
                                        }
                                        if (isset($data[93])) {
                                            $date_imagefile = $chk_img_url . $data[93];
                                        } else {
                                            // Handle the case where the index is not available
                                            $date_imagefile = '';  // You can set a default value or handle the error as needed
                                        }
                                        if (is_file($date_imagefile)) {
                                            $files_sys = new File;
                                            $d_date_image = $files_sys->fromUrl($temp_img_url.$data[93]);
                                            $d_date_image->is_public = true;
                                            $d_date_image->field = 'date_image';
                                            $d_date_image->attachment_id = $pack_id;
                                            $d_date_image->attachment_type = 'san\San\Models\Packages';
                                            $d_date_image->save();
                                        }
                                    }
                                }
                            }
                            $row++;
                        }
                    }
                    // die;
                }
                else
                {
                    Flash::error(Lang::get('briddle.data::lang.messages.type'));
                }
            }
            else
            {
                Flash::error(Lang::get('briddle.data::lang.messages.invalid'));
            }
        }
    }
}
