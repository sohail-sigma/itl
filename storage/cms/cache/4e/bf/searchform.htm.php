<?php 
class Cms6932ae413979d273578415_827532a12e790d086ffbdb1a3dd5a457Class extends Cms\Classes\PartialCode
{
public function onStart()
{
	$this['backendUrl'] = Backend::url('/');
	$s_pack = san\San\Models\Packages::where('status', 1)->get();
	$cList = array();
	$cListFinal = array();
	foreach ($s_pack as $sPackage) {
		foreach ($sPackage->countries as $countries) {
			$cname = ltrim($countries['country']);
			$isInArray = in_array($cname, array_column($cListFinal, 'country'));
			if (!$isInArray) {
				$cList['country'] = $cname;
				$cList['slug'] = $sPackage->slug;
				$cListFinal[] = $cList;
			}
		}
	}
	$this['countryListFinal'] = $cListFinal;

	//$this['allairports'] = san\San\Models\Airports::get();
	$this['airlines'] = san\San\Models\Airlines::get();
}
}
