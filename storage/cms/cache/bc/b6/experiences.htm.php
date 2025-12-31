<?php 
use itlworld\Ipcountries\Models\CountryRule;
class Cms69328bec49cae600130026_cd4e46e8d9b0c7cdebdba21b678d81beClass extends Cms\Classes\PageCode
{
public function getsortedMonth($monthList = [])
    {
        $sortedNameList = array();
        $monthNumberList = array();
        $maxLength = count($monthList);
        for($i = 0; $i < $maxLength; $i++)
        {
            $monthnumber = date('m',strtotime($monthList[$i]));
            array_push($monthNumberList,$monthnumber);	
        }
        sort($monthNumberList);
        for($j = 0; $j < $maxLength; $j++)
        {	
            $monthNum  = $monthNumberList[$j];
            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
            $monthName = $dateObj->format('F');
            array_push($sortedNameList,$monthName);
        }
        return $sortedNameList;

    }
    
    public function onGetAllExp()
	{
		$exps = array();
		$monthss = array();
		$singleexps = array();
		if(post('package') != 'any'){
			$s_pack = san\San\Models\Packages::where('countries', 'like', '%' . post('package') . '%')->get();
			foreach($s_pack as $all_p){
				$pack = san\San\Models\Packages::find($all_p->id);
				foreach($pack->destinations as $adestinations){
				$singleexps['title'] = $adestinations->title;
				$singleexps['slug'] = $adestinations->slug;
				$exps[] = $singleexps;
				}
				if($all_p->months != 0){
				foreach ($all_p->months as $month) {
					$monthss[] = $month;
				}
				}
			}
			$monthss = array_values(array_unique($monthss));
			$monthss = $this->getsortedMonth($monthss);
			
			$exps = array_map("unserialize", array_unique(array_map("serialize", $exps)));
			$this['allmonths'] = $monthss;
			$this['allexp'] = $exps;
		}elseif (post('package') == 'any') {
			$all_pack = san\San\Models\Destinations::get();
			foreach($all_pack as $all_p){
				$singleexps['title'] = $all_p->title;
				$singleexps['slug'] = $all_p->slug;
				$exps[] = $singleexps;
			}
			$months= [
						'1' => 'January',
						'2' => 'February',
						'3' => 'March',
						'4' => 'April',
						'5' => 'May',
						'6' => 'Jun',
						'7' => 'July',
						'8' => 'August',
						'9' => 'September',
						'10' => 'October',
						'11' => 'November',
						'12' => 'December'
					];
			$exps = array_map("unserialize", array_unique(array_map("serialize", $exps)));
			$this['allmonths'] = $months;
			$this['allexp'] = $exps;
		}
	}
    
    public function onChangeExp()
    {
        
        $pkgs = array();
        $pkgs_m = array();
        $monthss = array();
        $singleexps = array();
        $singleexps_m = array();
        $this['allpackages'] = array();
            if(post('package_change') == 'no' ){
                if(post('experience') != 'any' && post('month') != 'any')
                {
                    $all_pack = san\San\Models\Packages::where('status', '1')->get();
                    $cList = array();
                    $cListFinal = array();
                    foreach($all_pack as $all_p){
                        $pack = san\San\Models\Packages::find($all_p->id);
                        foreach($pack->destinations as $adestinations){
                            if($adestinations->slug == post('experience')){
                                if($pack->months){
                                    foreach ($pack->months as $single_month) {
                                        if($single_month == post('month')){
                                            foreach($pack->countries as $countries){
                                                $cname = ltrim($countries['country']);
                                                $isInArray = in_array($cname, array_column($cListFinal, 'country'));
                                                if(!$isInArray){
                                                    $cList['country'] = $cname;
                                                    $cList['slug'] = $pack->slug;
                                                    $cListFinal[] = $cList;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    $this['allpackages'] = $cListFinal;
                }
                
                if(post('experience') != 'any' && post('month') == 'any')
                {
                    $all_pack = san\San\Models\Packages::where('status', '1')->get();
                    $cList = array();
                    $cListFinal = array();
                    foreach($all_pack as $all_p){
                        $pack = san\San\Models\Packages::find($all_p->id);
                        foreach($pack->destinations as $adestinations){
                            if($adestinations->slug == post('experience')){
                        foreach($pack->countries as $countries){
                            $cname = ltrim($countries['country']);
                            $isInArray = in_array($cname, array_column($cListFinal, 'country'));
                            if(!$isInArray){
                            $cList['country'] = $cname;
                            $cList['slug'] = $pack->slug;
                            $cListFinal[] = $cList;
                            }
                        }
                            }
                        }
                    }
                    $this['allpackages'] = $cListFinal;
                }if(post('experience') == 'any' && post('month') != 'any')
                {
		            $cListFinal = array();
                    $all_pack = san\San\Models\Packages::where('status', '1')->get();
                    foreach($all_pack as $all_p){
                        $pack = san\San\Models\Packages::find($all_p->id);
                        if($pack->months){
                            foreach ($pack->months as $single_month) {
                                if($single_month == post('month')){
                                    foreach($pack->countries as $countries){
                            $cname = ltrim($countries['country']);
                            $isInArray = in_array($cname, array_column($cListFinal, 'country'));
                            if(!$isInArray){
                                $cList['country'] = $cname;
                                $cList['slug'] = $pack->slug;
                                $cListFinal[] = $cList;
                            }
                            }
                                }
                            }
                        }
                    }
                    $this['allpackages'] = $cListFinal;
                }elseif (post('experience') == 'any') {
                $cList = array();
                $cListFinal = array();
                    $all_pack = san\San\Models\Packages::where('status', '1')->get();
                    foreach($all_pack as $all_p){
                        foreach($all_p->countries as $countries){
                    $cname = ltrim($countries['country']);
                    $isInArray = in_array($cname, array_column($cListFinal, 'country'));
                    if(!$isInArray){
                        $cList['country'] = $cname;
                        $cList['slug'] = $all_p->slug;
                        $cListFinal[] = $cList;
                    }
                    }
                    }
                    $this['allpackages'] = $cListFinal;
                }
            }else{
                exit();
            }
    }
public function onSubmitNewsletterForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = post();
    
            $rules = [
                    'full_name' => 'required',
                    'email' => 'required|email|unique:san_san_newsletter'
                ];
                $errorMessages = [
                    'email.required' => 'Please enter your email',
                    'email.unique' => 'Email already exist',
                    'full_name.required' => 'Please enter your full name'
                ];
    
            $validation = Validator::make($data, $rules, $errorMessages);
    
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }else{
                $input = Input::all();
                $careers = new  san\San\Models\Newsletter;
                $careers->fulll_name = $input['full_name'];
                $careers->email = $input['email'];
                $careers->save();
                Flash::success('Submitted successfully!');
                unset($_POST);
            }
        }
    }
public function onEnd(){
        
         
        if(Request::segment(2) == ""){
            $this['slug'] = San\San\Models\Destinations::select('slug')->where('status', 1)->first();
        }else{
            $this['slug'] = Request::segment(2);
        }
        $destinations=[];
        $this['other_destinations'] = San\San\Models\Destinations::where('status', 1)->where('slug','!=', $this['slug'])->get();
       
        $this['destinations_List'] = San\San\Models\Destinations::where('status', 1)->get();
        
        foreach ($this['destinations_List'] as $k=>$record){
            if($record['slug'] == $this['slug']){
                $this['f_des_key'] =  $k;
            }
            $banner_html = '<div class="carousel-caption d-md-block"> <h1>'.$record['title'].'</h1><span class="line"><em></em></span></div>';
            if($record['banner_type'] == 'Image'){
                $scount = 1;
                foreach($record['banner_image'] as $banner_image){
                    if($scount == 1){
                        $ac = 'active';
                    }else{
                        $ac = '';
                    }
                    $banner_html .= '<div class="carousel-item '.$ac.' '.$scount.'"><div class="banner-image"><img class="d-block w-100" src="'.$banner_image->path.'" alt="'.$record['title'].'"></div> </div>';
                    $scount++;
                }
            }else if($record['banner_type'] == 'Video'){
                $scount = 1;
                foreach($record['banner_iframe'] as $banneriframe){
                    if($scount == 1){
                        $ac = 'active';
                    }else{
                        $ac = '';
                    }
                    $v_duration = $banneriframe['video_duration'] * 1000;
                    $videoLink = substr($banneriframe["iframe"],17);
                    $banner_html .= '<div class="carousel-item '.$ac.' '.$scount.'"  data-interval="'.$v_duration.'"><div class="banner-iframe"><iframe width="770" height="433" src="https://www.youtube.com/embed/'.$videoLink.'?playlist='.$videoLink.'&loop=1&amp;autoplay=1&amp;controls=0&amp;mute=1&amp;enablejsapi=1" title="'.$record["title"].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div></div>';
                    $scount++;
                }
            }
        
            $destinations[$k]=[
                'top_banner_html'=>$banner_html,
                'sub_title'=>$record['sub_title'],
                'name'=>$record['title'],
                'slug'=>$record['slug'],
                'slider_title'=>$record['main_slider_title'],
                'id'=>$record['id'],
                'description'=>$record['content'],
                'pimage'=>$record['thumbnail']?$record['thumbnail']->getThumb(270,270,'crop'):"themes/SAN/assets/img/logo.jpg",
                'dimage'=>$record['thumbnail']?$record['thumbnail']->getThumb(630,380,'crop'):"themes/SAN/assets/img/logo.jpg",
                'subs'=>[]
            ];
            if($record->packages){
                // // Get all country rules once (outside the loop for better performance)
                // $allRules = CountryRule::get();
                // $allRulesAttributes = $allRules->map->getAttributes()->toArray();
                
                foreach($record->packages as $c_package){
                    $shouldShowPackage = false;

                   

                    
                    
                    $packageIdMatch = in_array($_SESSION['countryName'] ,isset($c_package->package_country_select) ? $c_package->package_country_select : [] );
                     
                    // echo "<pre>";
                    // print_r($packageIdMatch);
                    // print_r($_SESSION['countryName']);
                    // print_r($c_package->package_country_select);
                    // echo "</pre>";
                    // exit;

                   

                    // Check if package matches any rule
                    // foreach($allRulesAttributes as $rule){
                    //     // Decode JSON mappings to array
                    //     $mappings = json_decode($rule['mappings'], true);
                        
                    //     if($mappings && isset($mappings['target_countries']) && isset($mappings['target_packages'])){
                    //         // Check if package ID is in target_packages
                    //         $packageIdMatch = in_array($c_package->id, $mappings['target_packages']);
                            
                    //         // Check if any country from package_country_select matches target_countries
                    //         $countryMatch = false;
                    //         if(isset($c_package['package_country_select']) && is_array($c_package['package_country_select'])){
                    //             $countryMatch = !empty(array_intersect($c_package['package_country_select'], $mappings['target_countries']));
                    //         }
                            
                    //         // If both package ID and country match, show the package
                    //         if($packageIdMatch && $countryMatch){
                    //             $shouldShowPackage = true;
                    //             break; // Found a match, no need to check other rules
                    //         }
                    //     }
                    // }
                    
                    
                    if($c_package->status == 1 && $packageIdMatch == 1){
                        $mpricee = "n/a";
                        if($c_package->price){
                            
                            foreach($c_package->price as $pricing){
                                // echo $pricing['currency']."<br>";
                                // echo "user_currency_code ".$this['user_currency_code'];
                                
                                

                                if($pricing['currency'] == $this['user_currency_code']){
                                    $package_price = (int)$pricing['price'];
                                    $package_price = number_format($package_price,0);
                                    $mpricee = $this['user_currency_code']." ".$package_price;
                                }else{
                                    if($pricing['currency'] == "usd" && $pricing['price'] != ""){
                                        $package_price = (int)$pricing['price'];
                                        $package_price = number_format($package_price,0);
                                        $mpricee = $pricing['currency']." ".$package_price;
                                    }
                                }
                            }
                            // echo "<br>---------------------------------<br>";
                        }
                        $destinations[$k]['subs'][]=[
                            'price'=>$mpricee,
                            'name'=>$c_package->caption_new,
                            'days'=>$c_package->days,
                            'nights'=>$c_package->night,
                            'brief'=>substr(strip_tags($c_package->brief), 0, 110),
                            'id'=>$c_package->id,
                            'slug'=>$c_package->slug,
                            'pimage'=>$c_package->thumbnail?$c_package->thumbnail->getThumb(270,270,'crop'):"themes/SAN/assets/img/logo.jpg",
                            'dimage'=>$c_package->thumbnail?$c_package->thumbnail->getThumb(630,380,'crop'):"themes/SAN/assets/img/logo.jpg"
                        ];
                    }
                }
            }
        }
        // die;
        
        $this['cdestinations_List'] = San\San\Models\Destinations::where('status', 1)->where('slug', $this['slug'])->get();
        // foreach ($destinations as $mkey => $desti) {
        //     if($desti['slug'] == $this['cdestinations_List'][0]['slug']){
        //         $this['f_des_key'] =  $mkey;
        //     }
        // }

        // echo "2: ".count($destinations)."<br>";
        $this['destination']=$destinations;
   }
}
