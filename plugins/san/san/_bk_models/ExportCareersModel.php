<?php 
namespace san\San\Models;
use \san\San\Models\Careers;

class ExportCareersModel extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $data = post();
        if($data['all_ids']){
            $all_ids = explode(",",$data['all_ids']);
            $expenquiry = Careers::whereIn('id', $all_ids)->get();
        }else{
            $expenquiry = Careers::all();
        }

        $expenquiry->each(function($booking) use ($columns) {
            $booking->addVisible($columns);
        });
        $careersData1 = array();
        $careersData = array();
        
        foreach($expenquiry as $exp){
            $qas = "";
            $c = 1;
            $questions = json_decode($exp['all_questions']);
            foreach($questions as $q){
                $qas .= '- Q'.$c.': '.$q->q.' ('.$q->a.')';
                $qas .="\n";
                $c = $c +1;
            }
            $fulll_name = $exp['fulll_name'];
            $dob = $exp['dob'];
            $phone = $exp['phone'];
            $c_email = $exp['c_email'];
            $gender = $exp['gender'];
            $pdetail = "Name: ".$fulll_name;
            $pdetail .="\n";
            $pdetail .= "Email: ".$c_email;
            $pdetail .="\n";
            $pdetail .= "DOB: ".$dob;
            $pdetail .="\n";
            $pdetail .= "Phone: ".$phone;
            $pdetail .="\n";
            $pdetail .= "Gender: ".$gender;

            $careersData1['fulll_name'] = $pdetail;
            $careersData1['all_questions'] = $qas;
            $careersData1['user_cv'] = "https://itl.scdwapps.com/storage/app/uploads/public/cv/".$exp['user_cv'];
            $careersData1['careerpositions_id'] = $exp['careerpositions_id'];
            $careersData1['created_at'] = $exp['created_at'];
            $careersData[] = $careersData1;
        }
        return $careersData;
    }
}