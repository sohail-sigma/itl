<?php 
class Cms6932887e2866d627937249_e970aefa2d08b8baf467fbbf50203aa3Class extends Cms\Classes\PartialCode
{
public function onEnd()
    {
        $currentPackage = san\San\Models\Packages::find($this->builderDetails->record->id);
        foreach($currentPackage->destinations as $adestinations){
            $this['expslugs'] = $adestinations->title;
        }
    }
}
