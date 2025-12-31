<?php namespace Briddle\Data\Controllers;

use BackendMenu;
use System\Classes\SettingsManager;
use Request;
use Input;
use File;
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

                    $result = false;
                    if (($handle = fopen(Input::file('import'), "r")) !== FALSE) {
                        
                        $row = 0;
                        while (($data = fgetcsv($handle, 5000, ",",'"')) !== FALSE) {
                            if($row > 0 ) {
                                $exp_title = iconv('Windows-1252', 'UTF-8', urldecode($data[2]));
                                $exp_sub_title = iconv('Windows-1252', 'UTF-8', urldecode($data[3]));
                                $exp_content =   iconv('Windows-1252', 'UTF-8', urldecode($data[4]));
                                $exp_slug = Str::slug($data[2]);


                                $experience = Db::table('san_san_destinations')->where('title', $exp_title)->first();
                                if(empty($experience)){
                                    $expData = [
                                        'title' => $exp_title,
                                        'sub_title' => $exp_sub_title,
                                        'content' =>   $exp_content,
                                        'status' =>  1,
                                        'sort_order' => $row,
                                        'slug' => $exp_slug,
                                        'created_at' => date('Y-m-d h:i:s'),
                                        'updated_at' =>  date('Y-m-d h:i:s'),
                                    ];
                                    Db::table('san_san_destinations')->insert(
                                        $expData
                                    );
                                    $exp_id = Db::getPdo()->lastInsertId();

                                    // if($exp_id){
                                    //     Db::table('system_files')->insert(
                                    //         [
                                    //             'disk_name' => $data[5],
                                    //             'file_name' => $data[5],
                                    //             'attachment_id' => $exp_id,
                                    //             'file_size' => '0',
                                    //             'attachment_type' =>  'san\San\Models\Destinations',
                                    //             'is_public' =>  1,
                                    //             'sort_order' => 0,
                                    //             'field' => 'banner',
                                    //             'content_type' => 'image/jpeg',
                                    //             'created_at' => date('Y-m-d h:i:s'),
                                    //             'updated_at' =>  date('Y-m-d h:i:s'),
                                    //         ]
                                    //     );
                                    //     Db::table('system_files')->insert(
                                    //         [
                                    //             'disk_name' => $data[6],
                                    //             'file_name' => $data[6],
                                    //             'attachment_id' => $exp_id,
                                    //             'file_size' => '0',
                                    //             'sort_order' => 0,
                                    //             'content_type' => 'image/jpeg',
                                    //             'attachment_type' =>  'san\San\Models\Destinations',
                                    //             'is_public' =>  1,
                                    //             'field'=>'image',
                                    //             'created_at' => date('Y-m-d h:i:s'),
                                    //             'updated_at' =>  date('Y-m-d h:i:s'),
                                    //         ]
                                    //     );
                                    // }

                                }else{
                                    $exp_id = $experience->id;
                                }
                                

                                $project_title = iconv('Windows-1252', 'UTF-8', urldecode($data[7]));
                                $project_sub_title = iconv('Windows-1252', 'UTF-8', urldecode($data[23]));
                                $project_content =   iconv('Windows-1252', 'UTF-8', urldecode($data[26]));
                                $project_caption = iconv('Windows-1252', 'UTF-8', urldecode($data[21]));
                                $project_sub_caption = iconv('Windows-1252', 'UTF-8', urldecode($data[24]));
                                $conditions = iconv('Windows-1252', 'UTF-8', urldecode($data[30]));
                                $slug = str_replace('http://www.itlworld.com/package/','',$data[22]);
                                $slug = Str::slug($slug);

                                $inclusions = array();
                                $inclusionsfld = iconv('Windows-1252', 'UTF-8', urldecode($data[27]));
                                $inclusionsArray = explode(',', $inclusionsfld);
                                if(!empty($inclusionsArray)){
                                    foreach($inclusionsArray as $x => $inclusion){
                                        //mb_convert_encoding($inclusion, "UTF-8");
                                        $inclusions[$x] = array(
                                            'point' => $inclusion
                                        );
                                    }
                                    $inclusions = json_encode($inclusions);
                                }else{
                                    $inclusions = '';
                                }
                                

                                $itineraries = array();
                                $itinerariesfld = iconv('Windows-1252', 'UTF-8', urldecode($data[28]));
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

                                

                                $exclusions = array();
                                $exclusionsfld = iconv('Windows-1252', 'UTF-8', urldecode($data[29]));
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
                                

                                $price = [];
                                if( $data[31] != ''){
                                    $price[] = array(
                                        'price' => $data[31],
                                        'currency' => 'aed',
                                    );
                                }
                                if( $data[32] != ''){
                                    $price[] = array(
                                        'price' => $data[32],
                                        'currency' => 'sar',
                                    );
                                }

                                if( $data[33] != ''){
                                    $price[] = array(
                                        'price' => $data[33],
                                        'currency' => 'bhd',
                                    );
                                }

                                if( $data[34] != ''){
                                    $price[] = array(
                                        'price' => $data[34],
                                        'currency' => 'kwd',
                                    );
                                }
                                if( $data[35] != ''){
                                    $price[] = array(
                                        'price' => $data[35],
                                        'currency' => 'omr',
                                    );
                                }
                                if( $data[36] != ''){
                                    $price[] = array(
                                        'price' => $data[36],
                                        'currency' => 'qar',
                                    );
                                }

                                if( $data[37] != ''){
                                    $price[] = array(
                                        'price' => $data[37],
                                        'currency' => 'usd',
                                    );
                                }

                                $price = json_encode($price);
                                // price db field change to text
                                $months = [];

                                if($data[8]=='Y'){
                                    $months[] = 'January';
                                }
                                if($data[9]=='Y'){
                                    $months[] = 'February';
                                }
                                if($data[10]=='Y'){
                                    $months[] = 'March';
                                }
                                if($data[11]=='Y'){
                                    $months[] = 'April';
                                }
                                if($data[12]=='Y'){
                                    $months[] = 'May';
                                }
                                if($data[13]=='Y'){
                                    $months[] = 'Jun';
                                }
                                if($data[14]=='Y'){
                                    $months[] = 'July';
                                }
                                if($data[15]=='Y'){
                                    $months[] = 'August';
                                }
                                if($data[16]=='Y'){
                                    $months[] = 'September';
                                }
                                if($data[17]=='Y'){
                                    $months[] = 'October';
                                }
                                if($data[18]=='Y'){
                                    $months[] = 'November';
                                }
                                if($data[19]=='Y'){
                                    $months[] = 'December';
                                }

                                if(empty($months)){
                                    $months = 0;
                                }else{
                                    $months = json_encode($months);
                                }

                                // for packages

                                $pkg_data = [
                                    'title' => $project_title,
                                    'slug' => $slug,
                                    'sub_title' => $project_sub_title,
                                    'caption' =>$project_caption,
                                    'sub_caption' =>  $project_sub_caption,
                                    'sort_order' => $row,
                                    //'brief' =>  mb_convert_encoding($data[24], "UTF-8"),
                                    'content' => $project_content,
                                    // 'enquiry_desc' =>  mb_convert_encoding($data[26], "UTF-8"),
                                    'inclusions' => $inclusions,
                                    'itineraries' => $itineraries,
                                    'exclusions' => $exclusions,
                                    'conditions' => $conditions,
                                    'price' => $price,
                                    'months' => $months,
                                    'theme_id' => 1,
                                    'status' =>  1,
                                    'created_at' => date('Y-m-d h:i:s'),
                                    'updated_at' =>  date('Y-m-d h:i:s'),
                                ];
                                // echo '<pre>';
                                // print_r($pkg_data);exit;
                                Db::table('san_san_packages')->insert(
                                    $pkg_data
                                );

                                $pack_id = Db::getPdo()->lastInsertId();

                                if($pack_id){
                                //     Db::table('system_files')->insert(
                                //         [
                                //             'disk_name' => $data[38],
                                //             'file_name' => $data[38],
                                //             'attachment_id' => $pack_id,
                                //             'file_size' => '0',
                                //             'attachment_type' =>  'san\San\Models\Packages',
                                //             'is_public' =>  1,
                                //             'sort_order' => 0,
                                //             'field' => 'banner',
                                //             'content_type' => 'image/jpeg',
                                //             'created_at' => date('Y-m-d h:i:s'),
                                //             'updated_at' =>  date('Y-m-d h:i:s'),
                                //         ]
                                //     );
                                //     Db::table('system_files')->insert(
                                //         [
                                //             'disk_name' => $data[39],
                                //             'file_name' => $data[39],
                                //             'attachment_id' => $pack_id,
                                //             'file_size' => '0',
                                //             'sort_order' => 0,
                                //             'content_type' => 'image/jpeg',
                                //             'attachment_type' =>  'san\San\Models\Packages',
                                //             'is_public' =>  1,
                                //             'field'=>'date_image',
                                //             'created_at' => date('Y-m-d h:i:s'),
                                //             'updated_at' =>  date('Y-m-d h:i:s'),
                                //         ]
                                //     );
                                //     Db::table('system_files')->insert(
                                //         [
                                //             'disk_name' => $data[40],
                                //             'file_name' => $data[40],
                                //             'attachment_id' => $pack_id,
                                //             'file_size' => '0',
                                //             'attachment_type' =>  'san\San\Models\Packages',
                                //             'is_public' =>  1,
                                //             'sort_order' => 0,
                                //             'field' => 'overview_image',
                                //             'content_type' => 'image/jpeg',
                                //             'created_at' => date('Y-m-d h:i:s'),
                                //             'updated_at' =>  date('Y-m-d h:i:s'),
                                //         ]
                                //     );
                                //     Db::table('system_files')->insert(
                                //         [
                                //             'disk_name' => $data[41],
                                //             'file_name' => $data[41],
                                //             'attachment_id' => $pack_id,
                                //             'file_size' => '0',
                                //             'sort_order' => 0,
                                //             'content_type' => 'image/jpeg',
                                //             'attachment_type' =>  'san\San\Models\Packages',
                                //             'is_public' =>  1,
                                //             'field'=>'inclusions_image',
                                //             'created_at' => date('Y-m-d h:i:s'),
                                //             'updated_at' =>  date('Y-m-d h:i:s'),
                                //         ]
                                //     );

                                    //for package and experience

                                    $result = Db::table('destinations_packages')->insert(
                                        [
                                            'packages_id' => $pack_id,
                                            'destinations_id' => $exp_id,
                                        ]
                                    );
                                }

                            }
                            $row++;
                            
                            
                        }
                        fclose($handle);
                        
                        

                        // Insert
                        // $result = Db::table($this->exptable)->insert(
                        //     $this->expcollection
                        // );
                        // $result = Db::table($this->tmp)->insert(
                        //     $this->collection
                        // );

                        // Feedback
                        if($result) {
                            //Event::fire('briddle.data.imported', [$this->tmp,$this->replace]);//$replace
                            Flash::success(Lang::get('briddle.data::lang.messages.imported'));
                        } else {
                            Flash::error(Lang::get('briddle.data::lang.messages.error'));
                        }
                    }
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
