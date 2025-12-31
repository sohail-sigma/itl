<?php 
   namespace san\San\Models;
   use \san\San\Models\Campaign1;

   class ExportCampaign1 extends \Backend\Models\ExportModel
   {
      public function exportData($columns, $sessionKey = null)
      {
         $data = post();
         if($data['all_ids']){
               $all_ids = explode(",",$data['all_ids']);
               $expenquiry = Campaign1::whereIn('id', $all_ids)->get();
         }else{
               $expenquiry = Campaign1::all();
         }

         $expenquiry->each(function($booking) use ($columns) {
               $booking->addVisible($columns);
         });
         return $expenquiry->toArray();
      }
   } ?>