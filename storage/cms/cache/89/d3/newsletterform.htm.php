<?php 
class Cms69314ab1204f7972067578_b8c384b34d03a9ce72833794210ba1a8Class extends Cms\Classes\PartialCode
{
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
}
