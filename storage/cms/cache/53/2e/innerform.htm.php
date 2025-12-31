<?php 
class Cms69318305c546a115588362_70dce3c5e3ab42266916150fadd988eaClass extends Cms\Classes\PartialCode
{
public function onStart()
   {
       $this['backendUrl'] = Backend::url('/');
		 $s_pack = san\San\Models\Packages::where('status', 1)->get();
		 $cList = array();
		 $cListFinal = array();
		 foreach($s_pack as $sPackage){
			foreach($sPackage->countries as $countries){
				$cname = ltrim($countries['country']);
				$isInArray = in_array($cname, array_column($cListFinal, 'country'));
				if(!$isInArray){
					$cList['country'] = $cname;
					$cList['slug'] = $sPackage->slug;
					$cListFinal[] = $cList;
				}
		 	}
		}
		$this['countryListFinal'] = $cListFinal;
   }
}
