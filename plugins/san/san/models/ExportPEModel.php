<?php 
namespace san\San\Models;
use \san\San\Models\PackageEnquiry;

class ExportPEModel extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $data = post();
        if($data['all_ids']){
            $all_ids = explode(",",$data['all_ids']);
            $expenquiry = PackageEnquiry::whereIn('id', $all_ids)->get();
        }else{
            $expenquiry = PackageEnquiry::all();
        }

        $expenquiry->each(function($booking) use ($columns) {
            $booking->addVisible($columns);
        });
        return $expenquiry->toArray();
    }
}