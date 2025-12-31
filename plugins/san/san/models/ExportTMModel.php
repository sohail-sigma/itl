<?php 
namespace san\San\Models;
use \san\San\Models\TravelEnquiry;

class ExportTMModel extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $data = post();
        if($data['all_ids']){
            $all_ids = explode(",",$data['all_ids']);
            $expenquiry = TravelEnquiry::whereIn('id', $all_ids)->get();
        }else{
            $expenquiry = TravelEnquiry::all();
        }

        $expenquiry->each(function($booking) use ($columns) {
            $booking->addVisible($columns);
        });
        return $expenquiry->toArray();
    }
}