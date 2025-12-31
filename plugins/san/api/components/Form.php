<?php namespace San\Api\Components;

use Cms\Classes\ComponentBase;
use San\Cms\Models\Enquiry;
use Validator;
class Form extends ComponentBase
{
    use \Winter\Storm\Database\Traits\Validation;
    public $rules = [
        'name' => 'required|between:4,16',
        'email' => 'required|email'
    ];
   public function componentDetails()
    {
        return [
            'name'        => 'Form Component',
            'description' => 'default Form'
        ];
    }


    public function submit($data){
        $rule=[
                    'name' => 'required|min:3',
                    'mobile' => 'required|min:6',
                    'email' => 'required|email',
                    'message' => 'required',
                    'email' => 'required|email',
                ];
        if(isset($data['package'])){
           $rule['package']= 'required';
        }
        $validator = Validator::make( $data,$rule );
        $out=[];
        if (!$validator->fails()) {
            $enquiry=new Enquiry();
            $enquiry->name=@$data['name'];
            $enquiry->email=@$data['email'];
            $enquiry->phone=@$data['mobile'];
            $enquiry->package=@$data['package'];
            $enquiry->type=@$data['type'];
            $enquiry->data=@$data['message'];
            $enquiry->save();
            $out['success']="Successfully Submited. We will contact you soon!";
        }else{
            $out['error'] =$validator->messages();
        }
        return $out;
        
    }
    public function onRun(){

    }
}