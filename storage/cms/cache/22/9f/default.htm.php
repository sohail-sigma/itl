<?php 
class Cms6954bacdb473f464055221_1fd318200e90b8f9b93a74a3d88ae8efClass extends Cms\Classes\LayoutCode
{
public function onStart()
{
    session_start();
    $api_cooldown = 15*60;
    
    // start initialize hard coded in cases any condition not executed
     // $_SESSION['country'] = $country ='AE';
   // $_SESSION['currencyCode'] = $currencyCode ='AED';
   // $_SESSION['countryName'] = $countryName = "United Arab Emirates";
/*     if (!isset($_SESSION['last_api_call']) || (time() - $_SESSION['last_api_call']) > $api_cooldown){
        $_SESSION['last_api_call'] = time();
    }else{
        print_r($_SESSION['last_api_call']);exit;
    }*/
    
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];
    $country = "Unknown";
    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Unknown';

    $path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
          

    // ✅ Log IP + User Agent + Path
   
    \Log::info("API CALL ".$ip);
    //$ip = '83.110.250.231'; //'135.181.154.2'; //'83.110.250.231';
     //$ip = '83.110.250.231';
    // $specialIps = ['20.171.207.221','135.220.210.143','2.50.33.44','188.71.212.164','103.181.238.234','124.123.71.215','188.143.244.144','66.249.93.229','135.225.24.191','66.249.93.230','66.249.93.228','40.86.77.238','216.81.248.73','20.199.38.45','103.16.202.234','37.99.148.146','111.92.61.111','66.249.84.100','66.249.84.98','66.249.84.99'];
  //  if (in_array($ip, $specialIps) || strpos($ip, '66.249') === 0) {
        //    $country ='AE';
        //    $currencyCode ='AED';
       //     $countryName = "United Arab Emirates";
    //} else{
        if (!isset($_SESSION['last_api_call']) || (time() - $_SESSION['last_api_call']) > $api_cooldown){
            
            $_SESSION['last_api_call'] = time();
             \DB::table('ip_logs')->insert([
        'ip' => $ip,
        'user_agent' => $userAgent,
        'path' => $path,
        'created_at' => now()
    ]);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://apiip.net/api/check?ip=" . $ip . "&accessKey=992d6d78-1215-44c9-b72f-715caafd9cc3");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $ip_data_in = curl_exec($ch); // string
            curl_close($ch);
            //print "<pre>".print_r($ip_data_in, true)."</pre>";
            //exit;
            $ip_data = json_decode($ip_data_in, true);
            $ip_data = str_replace('&quot;', '"', $ip_data); 
            //echo "<pre>";print_r($ip_data);exit;
            if ($ip_data && isset($ip_data['countryCode']) && $ip_data['countryCode'] != null) {
                $_SESSION['country'] = $country = $ip_data['countryCode'];
                $_SESSION['currencyCode'] = $currencyCode = $ip_data['currency']['code'];
                $_SESSION['countryName'] = $countryName = $ip_data['countryName'];
               
            }else{
                 $_SESSION['country'] = $country ='AE';
                 $_SESSION['currencyCode'] = $currencyCode ='AED';
                 $_SESSION['countryName'] = $countryName = "United Arab Emirates";
            }
        }else{
            $country = $_SESSION['country'];
            $currencyCode = $_SESSION['currencyCode'];
            $countryName = $_SESSION['countryName'];
        }
               
   // }
            $this['user_country_code'] = strtolower($country);
    $this['user_currency_code'] = strtolower($currencyCode);
        $this['user_country_name'] = strtolower($countryName);
     
     
     if(!isset($_SESSION['country']) || !isset($_SESSION['currencyCode']) || !isset($_SESSION['countryName']) )
     {
         $_SESSION['country'] = $country ='AE';
                 $_SESSION['currencyCode'] = $currencyCode ='AED';
                 $_SESSION['countryName'] = $countryName = "United Arab Emirates";
     }
     
     //$country ='AE';
       //$currencyCode ='AED';
      // $countryName = "United Arab Emirates";
    //$this['user_country_code'] = strtolower($country);
    //$this['user_currency_code'] = strtolower($currencyCode);
      //  $this['user_country_name'] = strtolower($countryName);
    
     // echo "<pre>"; print_r($this['user_currency_code']);die;
    /*$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.com/json.gp?ip=" . $ip . "&key=737bedfc-5dfe-40bb-9707-edec8ee911e1");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);
    //print "<pre>".print_r($ip_data_in, true)."</pre>";
    //exit;
    $ip_data = json_decode($ip_data_in, true);
    $ip_data = str_replace('&quot;', '"', $ip_data); 
    //print_r($ip_data);exit;
    if ($ip_data && isset($ip_data['geoplugin_countryCode']) && $ip_data['geoplugin_countryCode'] != null) {
        $country = $ip_data['geoplugin_countryCode'];
       $currencyCode = $ip_data['geoplugin_currencyCode'];
    }else{
         $country ='AE';
       $currencyCode ='AED';
        }

    $this['user_country_code'] = strtolower($country);
    $this['user_currency_code'] = strtolower($currencyCode);
    //$this['user_country_code'] = 'AE';
    //$this['user_currency_code'] = 'AED';*/
    
    $myexpslug = Request::segment(1);
    $this['expslug'] = Request::segment(2);
    
    if($myexpslug == "experiences"){
        $this['cdestinations'] = San\San\Models\Destinations::where('status', 1)->where('slug', $this['expslug'])->get();
        $this['emeta_title'] = $this['cdestinations'][0]['meta_title'];
        $this['emeta_desc'] = $this['cdestinations'][0]['meta_desc'];
        if($this['cdestinations'][0]['meta_image'] != ""){
            $this['emeta_image'] = $this['cdestinations'][0]['meta_image']['path'];
        }else{
            $this['emeta_image'] = "";
        }
    }
    if($myexpslug == "holidays"){
        $this['holidaysdata'] = San\San\Models\Holidays::where('id', 13)->get();
        $this['holiday_meta_title'] = $this['holidaysdata'][0]['meta_title'];
        $this['holiday_meta_desc'] = $this['holidaysdata'][0]['meta_desc'];
    }
    if($myexpslug == "travel-management"){
        $this['tmdata'] = San\San\Models\Holidays::where('id', 7)->get();
        $this['tm_meta_title'] = $this['tmdata'][0]['meta_title'];
        $this['tm_meta_desc'] = $this['tmdata'][0]['meta_desc'];
    }
    if($myexpslug == "services"){
        $this['servicesdata'] = San\San\Models\Holidays::where('id', 8)->get();
        $this['services_meta_title'] = $this['servicesdata'][0]['meta_title'];
        $this['services_meta_desc'] = $this['servicesdata'][0]['meta_desc'];
    }
    if($myexpslug == "careers"){
        $this['careersdata'] = San\San\Models\Holidays::where('id', 9)->get();
        $this['careers_meta_title'] = $this['careersdata'][0]['meta_title'];
        $this['careers_meta_desc'] = $this['careersdata'][0]['meta_desc'];
    }
    if($myexpslug == "news-blog"){
        $this['holidaysdata'] = San\San\Models\Holidays::where('id', 12)->get();
        $this['newsblog_meta_title'] = $this['holidaysdata'][0]['meta_title'];
        $this['newsblog_meta_desc'] = $this['holidaysdata'][0]['meta_desc'];
    }
     if($myexpslug == "detail"){
        $this['ndetails'] = Winter\Blog\Models\Post::where('slug', $this['expslug'])->get();
        $this['nmeta_title'] = $this['ndetails'][0]['title'];
        $this['nmeta_desc'] = $this['ndetails'][0]['content'];
        $this['blogDate'] = date('j F Y', strtotime($this['ndetails'][0]['published_at'])); 

        if ($this['ndetails'][0]['featured_images'] && count($this['ndetails'][0]['featured_images']) > 0) {
        $this['nmeta_image'] = $this['ndetails'][0]['featured_images'][0]['path'];
    } else {
        $this['nmeta_image'] = '/default-image-path.jpg'; 
    }
    }
    $this['eurl'] = Request::url();
}
}
