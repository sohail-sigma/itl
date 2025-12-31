<?php 
class Cms6932887cc0743473933076_bfc4d787165415e6ee63e1976c3d9b60Class extends Cms\Classes\PageCode
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
                                                    $cList['slug'] = $cname;
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
                            $cList['slug'] = $cname;
                            $cListFinal[] = $cList;
                            }
                        }
                            }
                        }
                    }
                    $this['allpackages'] = $cListFinal;
                }if(post('experience') == 'any' && post('month') != 'any')
                {
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
                                $cList['slug'] = $cname;
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
public function onEnd(){
        $packageList = array();
        if(post('exp_slug') != ''){
            $this['c_package'] = post('package_id');
            $this['dest_slug'] = post('exp_slug');
            $single_destination = San\San\Models\Destinations::where('slug', post('exp_slug'))->get();
            $this['expTitle'] = $single_destination[0]->title;
            foreach ($single_destination[0]->packages as $singlepackage) {
                if($singlepackage->status == 1){
                    $packageList[] = $singlepackage;
                }
            }
            $this['package_List'] = $packageList;
        }else{
            $s_slug = $this->builderDetails->record->active(1)->get();
            $single_pacage = San\San\Models\Packages::where('slug', $this->builderDetails->record->slug)->get();
            $this['package_List'] = $single_pacage;

            $all_destination = San\San\Models\Destinations::where('status', '1')->get();
            foreach ($all_destination as $destination) {
                foreach ($destination->packages as $packag) {
                if($packag->status == 1 AND $packag->slug == $this->builderDetails->record->slug ){
                    $this['expTitle'] = $destination->title;
                }
            }
            }

        }
        if(!@$_GET['preview'] || !Session::get('_token')){
            $page=$this->builderDetails->record->active(1)->get();
            if(!count($page)){
                $this->setStatusCode(404);
                return $this->controller->run('404');
            }
        }
        if($metadata=$this->builderDetails->record['meta_title']) $this->page->meta_title = $metadata;
        if($metadata=$this->builderDetails->record['meta_desc']) $this->page->meta_description = $metadata;
        if($metadata=$this->builderDetails->record['meta_image']) $this->page->og_image = $metadata->getThumb(1200,630);
    }
public function onSubmitEnquiryForm()
    {
        $data = post();
        $rules = [
            'pacage' => 'required',
            'experiences' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            //'nationality' => 'required',
            //'country' => 'required',
            'city' => 'required',
            'no_adults' => 'required',
            'departure_from' => 'required',
            'when_start' => 'required',
            'how_long' => 'required|numeric|min:1',
        ];
        
        $errorMessages = [
            'pacage.required' => 'Please select package',
            'experiences.required' => 'Please select experiences',
            'first_name.required' => 'Enter your first name',
            'last_name.required' => 'Enter your last name',
            'email.required' => 'Enter your email',
            'phone.required' => 'Enter your phone number',
            'city.required' => 'Enter your city name',
            //'nationality.required' => 'Select nationality',
            //'country.required' => 'Select country',
            'no_adults.required' => 'Enter number of adults',
            'departure_from.required' => 'Enter departure date',
            'when_start.required' => 'This feild is required',
            'how_long.required' => 'Enter number of days',
            'how_long.min' => 'Days must be greater then 1',
            'how_long.numeric' => 'Not valid days',
        ];

        $validation = Validator::make($data, $rules, $errorMessages);

        if ($validation->fails()) {
            throw new ValidationException($validation);
        }else{
            $input = Input::all();
        
            $enq = new  san\San\Models\PackageEnquiry;
            $enq->pacage = $input['pacage'];
            $enq->experiences = $input['experiences'];
            $enq->first_name = $input['first_name'];
            $enq->last_name = $input['last_name'];
            $enq->email = $input['email'];
            $enq->phone = $input['phone'];
            $enq->city = $input['city'];
            $enq->nationality = $input['nationality'];
            $enq->country = $input['country'];
            $enq->no_adults = $input['no_adults'];
            $enq->no_children = $input['no_children'];
            $enq->departure_from = $input['departure_from'];
            $enq->when_start = $input['when_start'];
            $enq->how_long = $input['how_long'];
            $enq->remarks_comments = $input['remarks_comments'];
            $enq->created_at = date("Y-m-d h:i:s a");

            $enq->save();
            if(isset($input['newsletter'])){
                $is_already = san\San\Models\Newsletter::where('email', $input['email'])->get();
                if(count($is_already) == 0){
                    $news_letter = new  san\San\Models\Newsletter;
                    $news_letter->email = $input['email'];
                    $news_letter->fulll_name = $input['first_name']." ".$input['last_name'];
                    $news_letter->save();
                }
            }

            $vars = [
                'name' => $input['first_name']." ".$input['last_name'],
                'package_name' => $input['pacage'],
                'experiences' => $input['experiences'],
                'email' => $input['email'],
                'nationality' => $input['nationality'],
                'country' => $input['country'],
                'phone' => $input['phone'],
                'city' => $input['city'],
                'no_adults' => $input['no_adults'],
                'no_children' => $input['no_children'],
                'departure_from' => $input['departure_from'],
                'when_start' => $input['when_start'],
                'how_long' => $input['how_long'],
                'remarks_comments' => $input['remarks_comments'],
            ];
            // print_r($vars);die;
            Mail::send('package_temp', $vars, function($message) {
                $enqmails = san\San\Models\EnquiryEmails::where('id', '14')->first();
                $message->to($enqmails['content_2'], 'Package query');
                $message->subject('Package query');
            });

			Mail::send('user_confirmation_email', $vars, function ($message) {$message->to($_POST['email']);});
            Flash::success('Submitted successfully!');
            unset($_POST);
        }

        Flash::success('Jobs done!');
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
}
