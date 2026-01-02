<?php 
class Cms69551afb060a9225516458_262da9bd7b7e999adade84cd4e9e3123Class extends Cms\Classes\PageCode
{
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
public function onSubmitAboutForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = post();
            $rules = [
                'work_in' => 'required',
                'speak_with' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'c_name' => 'required',
                'designation' => 'required',
                'phone' => 'required',
                'country' => 'required',
                'city' => 'required',
                'supplier' => 'required',
            ];
            $errorMessages = [
                'work_in.required' => 'Please select one option',
                'speak_with.required' => 'Please select option',
                'first_name.required' => 'Enter your first name',
                'last_name.required' => 'Enter your last name',
                'email.required' => 'Enter your email',
                'c_name.required' => 'Enter your company name',
                'city.required' => 'Enter your city name',
                'designation.required' => 'Enter your designation',
                'phone.required' => 'Enter your phone number',
                'country.required' => 'Enter your country name',
                'supplier.required' => 'Please select one option',
            ];

            $validation = Validator::make($data, $rules, $errorMessages);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }else{
                $input = Input::all();
                // print_r($input);die;
                
                $work_in = json_encode($input['work_in']);
                $supplier = json_encode($input['supplier']);
                
                $enq = new  san\San\Models\AboutEnquiry;
                $enq->work_in = $work_in; 
                $enq->speak_with = $input['speak_with']; 
                $enq->first_name = $input['first_name']; 
                $enq->last_name = $input['last_name']; 
                $enq->email = $input['email'];
                $enq->c_name = $input['c_name'];
                $enq->designation = $input['designation'];
                $enq->phone = $input['phone'];
                $enq->country = $input['country'];
                $enq->city = $input['city'];
                $enq->supplier = $supplier;
                $enq->created_at = date("Y-m-d h:i:s a");

                if($input['speak_with']== "Travel Management"){
                    if(isset($input['bookable_gds'])){
                        $enq->bookable_gds = $input['bookable_gds']; 
                    }
                    $enq->gds_code = $input['gds_code'];

                }else{
                    if(isset($input['diverse_vendor'])){
                        $enq->diverse_vendor = $input['diverse_vendor'];
                    }
                }

                $enq->save();


                
                $work_ins = '';
                foreach($input['work_in'] as $work_in){
                    $work_ins .= $work_in.", ";
                }

                $suppliers = '';
                foreach($input['supplier'] as $supplier){
                    $suppliers .= $supplier.", ";
                }
                $mailmsg = "<b>Name</b>: ".$input['first_name']." ".$input['last_name'];
                $mailmsg .= "<br><b>I work in</b>: ".$work_ins;
                $mailmsg .= "<br><b>I’m would like to speak with you on</b>: ".$input['speak_with'];
                $mailmsg .= "<br><b>Business Email</b>: ".$input['email'];
                $mailmsg .= "<br><b>Company name</b>: ".$input['c_name'];
                $mailmsg .= "<br><b>Designation</b>: ".$input['designation'];
                $mailmsg .= "<br><b>Mobile Number</b>: ".$input['phone'];
                $mailmsg .= "<br><b>Country</b>: ".$input['country'];
                $mailmsg .= "<br><b>City</b>: ".$input['city'];
                $mailmsg .= "<br><b>I am a supplier of</b>: ".$suppliers;

                if($input['speak_with'] == "Travel Management"){
                    if(isset($input['bookable_gds'])){
                        $mailmsg .= "<br><b>If a hotel, please provide your two-letter GDS code</b>: ".$input['gds_code'];
                        $mailmsg .= "<br><b>Are your services bookable via GDS?</b>: ".$input['bookable_gds'];
                    }
                }else{
                    if(isset($input['diverse_vendor'])){
                        $mailmsg .= "<br><b>Certified diverse vendor</b>: ".$input['diverse_vendor'];

                    }
                }
                $vars = ['mailmsg'=> $mailmsg,'name'=> $input['first_name']." ".$input['last_name']];
                try 
                {
                    Mail::send('about_q', $vars, function($message) {
                        $enqmails = san\San\Models\EnquiryEmails::where('id', '14')->first();
                        $message->to($enqmails['content_1'], 'About query');
                        $message->subject('About query');
                    });
                    Mail::send('user_confirmation_email', $vars, function ($message) {$message->to($_POST['email']);});
                }catch (Exception $ex) {
                    trace_log($ex);
                }


                if(isset($input['newsletter'])){
                    $is_already = san\San\Models\Newsletter::where('email', $input['email'])->get();
                    if(count($is_already) == 0){
                        $news_letter = new  san\San\Models\Newsletter;
                        $news_letter->email = $input['email'];
                        $news_letter->fulll_name = $input['first_name']." ".$input['last_name'];
                        $news_letter->save();
                    }
                }
                Flash::success('Submitted successfully!');
                unset($_POST);
            }
        }
    }
}
