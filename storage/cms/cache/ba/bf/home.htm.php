<?php 
class Cms6932adf4e5608068199713_93cef3ac86030ca533efdcb3775da435Class extends Cms\Classes\PageCode
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
public function onStart(){
		$this['destinationsList'] = san\San\Models\Destinations::where('is_featured', '1')->take(30)->get();

      // $json = file_get_contents('storage/app/media/airport-api.json');
      // $airarray = json_decode($json,true);

      $string = file_get_contents("storage/app/media/airport-api.json");
      $airportdata = json_decode($string, true);
      Session::put('airarray', $airportdata);
	}

   public function onResetContry()
   {
      $cList = array();
		$cListFinal = array();
		$all_pack = san\San\Models\Packages::where('status', '1')->get();
		foreach($all_pack as $all_p){
			$pack = san\San\Models\Packages::find($all_p->id);
         foreach($pack->countries as $countries){
            $cname = ltrim($countries['country']);
            $isInArray = in_array($cname, array_column($cListFinal, 'country'));
            if(!$isInArray){
               $cList['country'] = $cname;
               $cList['slug'] = $cname;
               $cListFinal[] = $cList;
            }
         }
		}
      $this['allpackages'] = $cListFinal;
   }

   public function onResetExperience()
   {
      $allexps = array();
      $all_pack = san\San\Models\Destinations::get();
      foreach($all_pack as $all_p){
         $singleexps['title'] = $all_p->title;
         $singleexps['slug'] = $all_p->slug;
         $allexps[] = $singleexps;
      }
      $allexps = array_map("unserialize", array_unique(array_map("serialize", $allexps)));
      // print_r($allexps);
      $this['allexp'] = $allexps;
   }
   public function onResetMonth()
   {
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
      $this['allmonths'] = $months;
   }

	public function onGetAllExp()
	{
		$exps = array();
		$monthss = array();
		$singleexps = array();
      if(post('experience_value') == 'any'){
         if(post('package') != 'any'){
            $s_pack = san\San\Models\Packages::where('countries', 'like', '%' . post('package') . '%')->get();
               // echo post('package');
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
      }else{
         exit();
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
      // echo post('package_change');
		if(post('package_value') == 'any' ){
			if(post('experience') != 'any' && post('month') != 'any') {
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
         if(post('experience') != 'any' && post('month') == 'any') {
				$all_pack = san\San\Models\Packages::where('status', '1')->get();
            $cList = array();
		      $cListFinal = array();
				foreach($all_pack as $all_p){
					$pack = san\San\Models\Packages::find($all_p->id);
					foreach($pack->destinations as $adestinations){
						if($adestinations->slug == post('experience')){
                     foreach($pack->countries as $countries){
                        // print_r($countries);
                        $cname = ltrim($countries['country']);
                        $isInArray = in_array($cname, array_column($cListFinal, 'country'));
                        if(!$isInArray){
                           $cList['country'] = $cname;
                           $cList['slug'] = $cname;
                           $cListFinal[] = $cList;
                        }
                      }
						}
					}
				}
				$this['allpackages'] = $cListFinal;
			}
         if(post('experience') == 'any' && post('month') != 'any') {
				$all_pack = san\San\Models\Packages::where('status', '1')->get();
		      $cListFinal = array();
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
                              $cList['slug'] = $cname;
                              $cListFinal[] = $cList;
                           }
                        }
							}
						}
					}
				}
				$this['allpackages'] = $cListFinal;
			}
         elseif (post('experience') == 'any') {
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
public function onEnd(){
      if($metadata=$this->builderDetails->record['meta_title']) $this->page->meta_title = $metadata;
      if($metadata=$this->builderDetails->record['meta_desc']) $this->page->meta_description = $metadata;
      if($metadata=$this->builderDetails->record['meta_image']) $this->page->og_image = $metadata->getThumb(1200,630);
   }
public function onSubmitNewsletterForm()
   {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $data = post();
 
         $rules = [
                 'full_name' => 'required',
                 'email' => 'required|unique:san_san_newsletter'
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
   

   public function onKeyPressCity()
   {
      $hotelDestination = post('search-destination');
      $curl = curl_init();
      if(strlen($hotelDestination) > 3){

        $curl = curl_init();

         curl_setopt_array($curl, array(
         CURLOPT_URL => 'https://hotelout.aos-dev.com/api/Hotel/HotelCities',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'POST',
         CURLOPT_POSTFIELDS =>'{
            "cityName": "'.$hotelDestination.'",
            "languageCode": "en"
         }',
         CURLOPT_HTTPHEADER => array(
            'orgId: 2112080905210313767',
            'Content-Type: application/json',
            'Authorization: Bearer '.Session::get('hotelapitoken'),
            'Cookie: routes=1714450426.432.8233.372992|95f0b66243471f01a7702fc525e92d76'
         ),
         ));
         // echo Session::get('hotelapitoken');
         $response = curl_exec($curl);

         curl_close($curl);
         $allcities = json_decode($response, true);
         $listOfCitiy = array();
         if($allcities ){
            foreach($allcities['cities'] as $cities){
               $list['displayName'] = $cities['displayName'];
               $list['countryCode'] = $cities['countryCode'];
               $list['cityCode'] = $cities['cityCode'];
               $list['city_Id'] = $cities['cityID'];
               $listOfCitiy[] = $list;
            }
         }
         if($listOfCitiy){
            $this['alldestinations'] = $listOfCitiy;
         }else{
            return false;
         }
      }else{
         return false;
      }
   }


   public function onKeyPressNationality()
   {
      $nationality = post('search-nationality');
      if(strlen($nationality) > 2){
         // $url = 'https://adminapi.futuretravelplatform.com/api/MasterSearch/GetAllCountry/EN/'.$nationality;
         // $curl = curl_init();
         // curl_setopt_array($curl, array(
         // CURLOPT_URL => $url,
         // CURLOPT_RETURNTRANSFER => true,
         // CURLOPT_ENCODING => '',
         // CURLOPT_MAXREDIRS => 10,
         // CURLOPT_TIMEOUT => 0,
         // CURLOPT_FOLLOWLOCATION => true,
         // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         // CURLOPT_CUSTOMREQUEST => 'GET',
         // CURLOPT_HTTPHEADER => array(
         //    'Cookie: routes=1696855347.773.13552.553702|5aeaa99d4723c8bc33a0d785020b9cbc'
         // ),
         // ));

         // $listnationality = curl_exec($curl);
         // curl_close($curl);
         // $allnationality = json_decode($listnationality, true);
         
         $allnationality = san\San\Models\Nationality::Where('nationality','like',"%{$nationality}%")->get();
         // print_r($allnationality);
         $nationalitylist = array();
         foreach($allnationality as $national){
            $list['country_code'] = $national['country_code'];
            $list['country_name'] = $national['country_name'];
            $nationalitylist[] = $list;
         }
         if($nationalitylist){
            $this['listOfNationality'] = $nationalitylist;
         }else{
            return false;
         }
      }else{
         return false;
      }
   }

   public function onKeyPressAirport()
   {
      $airport = "";
      if(post('search-rt-dep') != "" ){
         $airport = post('search-rt-dep');
      }elseif( post('search-rt-arrival') != ""){
         $airport = post('search-rt-arrival');
      }elseif( post('search-departure-oneway') != ""){
         $airport = post('search-departure-oneway');
      }elseif( post('search-arrival-oneway') != ""){
         $airport = post('search-arrival-oneway');
      }elseif( post('search-mc-dep2') != ""){
         $airport = post('search-mc-dep2');
      }elseif( post('search-mc-arr2') != ""){
         $airport = post('search-mc-arr2');
      }elseif( post('search-mc-dep1') != ""){
         $airport = post('search-mc-dep1');
      }elseif( post('search-mc-arr1') != ""){
         $airport = post('search-mc-arr1');
      }elseif( post('search-mc-dep-gen') != ""){
         $airport = post('search-mc-dep-gen');
      }elseif( post('search-mc-arr-gen') != ""){
         $airport = post('search-mc-arr-gen');
      }

      $allairport = san\San\Models\Airports::Where('ac','like',"%{$airport}%")->Orwhere('an','like',"%{$airport}%")->get();
      $airportlist = array();
      if($allairport){
         foreach($allairport as $ap){
            $list['ac'] = $ap['ac'];
            $list['an'] = $ap['an'];
            $airportlist[] = $list;
         }
      }
      if($airportlist){
         $this['listOfairport'] = $airportlist;
      }else{
         return false;
      }
   }

   public function onKeyPressAirportJson()
   {
      $airport = "";
      if(post('search-rt-dep') != "" ){
         $airport = post('search-rt-dep');
      }elseif( post('search-rt-arrival') != ""){
         $airport = post('search-rt-arrival');
      }elseif( post('search-departure-oneway') != ""){
         $airport = post('search-departure-oneway');
      }elseif( post('search-arrival-oneway') != ""){
         $airport = post('search-arrival-oneway');
      }elseif( post('search-mc-dep2') != ""){
         $airport = post('search-mc-dep2');
      }elseif( post('search-mc-arr2') != ""){
         $airport = post('search-mc-arr2');
      }elseif( post('search-mc-dep1') != ""){
         $airport = post('search-mc-dep1');
      }elseif( post('search-mc-arr1') != ""){
         $airport = post('search-mc-arr1');
      }elseif( post('search-mc-dep-gen') != ""){
         $airport = post('search-mc-dep-gen');
      }elseif( post('search-mc-arr-gen') != ""){
         $airport = post('search-mc-arr-gen');
      }

      $json = file_get_contents('storage/app/media/airport-api.json');
      $airarray = json_decode($json,true);
      // $airarray = Session::get('airarray');
      $ID = isset($_GET['keyword']) ? $_GET['keyword'] : '';
      $allairport = array_filter($airarray, function ($var) use ($airport) {
        return (str_contains($var['an'], $airport));
      });
      // print_r($allairport);

      // $allairport = san\San\Models\Airports::Where('ac','like',"%{$airport}%")->Orwhere('an','like',"%{$airport}%")->get();
      $airportlist = array();
      if($allairport){
         foreach($allairport as $ap){
            $list['ac'] = $ap['ac'];
            $list['an'] = $ap['an'];
            $airportlist[] = $list;
         }
      }
      if($airportlist){
         $this['listOfairport'] = $airportlist;
      }else{
         return false;
      }
   }

   public function onKeyPressAirport_old()
   {
      $airport = "";
      if(post('search-rt-dep') != "" ){
         $airport = post('search-rt-dep');
      }elseif( post('search-rt-arrival') != ""){
         $airport = post('search-rt-arrival');
      }elseif( post('search-departure-oneway') != ""){
         $airport = post('search-departure-oneway');
      }elseif( post('search-arrival-oneway') != ""){
         $airport = post('search-arrival-oneway');
      }elseif( post('search-mc-dep2') != ""){
         $airport = post('search-mc-dep2');
      }elseif( post('search-mc-arr2') != ""){
         $airport = post('search-mc-arr2');
      }elseif( post('search-mc-dep1') != ""){
         $airport = post('search-mc-dep1');
      }elseif( post('search-mc-arr1') != ""){
         $airport = post('search-mc-arr1');
      }elseif( post('search-mc-dep-gen') != ""){
         $airport = post('search-mc-dep-gen');
      }elseif( post('search-mc-arr-gen') != ""){
         $airport = post('search-mc-arr-gen');
      }
      

      if(strlen($airport) > 2){
         $curl = curl_init();
         curl_setopt_array($curl, array(
         CURLOPT_URL => 'flightout.aos-dev.com/api/Airport/GetList/en/'.$airport,
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'GET',
         CURLOPT_HTTPHEADER => array(
               'orgId: 2112080905210313767',
               'Authorization: Bearer '.Session::get('apitoken')
            ),
         ));
         
         $listairport = curl_exec($curl);
         curl_close($curl);
         $allairport = json_decode($listairport, true);
         $airportlist = array();
         if($allairport){
            foreach($allairport as $ap){
               $list['ac'] = $ap['ac'];
               $list['an'] = $ap['an'];
               $airportlist[] = $list;
            }
         }
         if($airportlist){
            $this['listOfairport'] = $airportlist;
         }else{
            return false;
         }
      }else{
         return false;
      }
   }
}
