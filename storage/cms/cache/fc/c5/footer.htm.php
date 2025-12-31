<?php 
class Cms69314ab1113fb721856845_804abbe6eddc1f746008bfbe293e4b99Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    $this['allPosts'] = Winter\Blog\Models\Post::where('published', '1')->take(2)->latest('published_at')->get();
    $this['contactDetails'] = san\San\Models\Contact::where('id', '2')->first();

}
public function onSubmitNewsletterForm()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = post();

        $rules = [
            'name_newsletter' => 'required',
            'email_newsletter' => 'required'
        ];
        $errorMessages = [
            'email_newsletter.required' => 'Please enter your email.',
            'name_newsletter.required' => 'Please enter your full name.'
        ];

        $validation = Validator::make($data, $rules, $errorMessages);

        if ($validation->fails()) {
            throw new ValidationException($validation);
        } else {
            $input = Input::all();
            $careers = new  san\San\Models\Newsletter;
            $careers->fulll_name = $input['name_newsletter'];
            $careers->email = $input['email_newsletter'];
            $careers->save();
            Flash::success('Submitted successfully!');
            unset($_POST);
        }
    }
}
}
