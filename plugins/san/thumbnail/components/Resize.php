<?php namespace San\Thumbnail\Components;

use Cms\Classes\ComponentBase;
use Winter\Storm\Database\Attach\Resizer;
use File;

class Resize extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Resize Component',
            'description' => 'Resize media images'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function url($path, $width = 'auto', $height = 'auto', $options = [])
    {
        return url(\System\Classes\MediaLibrary::url($path));
    }
    public function resizeThumbnail($path, $width = 'auto', $height = 'auto', $options = [])
    { 
        
        $path= url(\System\Classes\MediaLibrary::url($path));
        
        $baseUrl = url('/');
        if (substr($path, 0, strlen($baseUrl)) === $baseUrl) {
            $_path = substr($path, strlen($baseUrl));
            $_path = base_path(ltrim($_path, '/'));
        }

        if (file_exists($_path) && strpos(basename($_path),'.') && filesize($_path)<300000) {
            $newpath=str_replace('media','resized/'.date('m'),$_path);
            $getlastmonth=explode(date('m'),$newpath);
            $getlastmonth=$getlastmonth[0].date("m", strtotime("-31 days"));
            if (File::isDirectory($getlastmonth)) {
                File::deleteDirectory($getlastmonth);
            }
            $pos = strrpos($newpath, '.');
            if($pos !== false)
            {
                $newpath = substr_replace($newpath, ('_'.$width.'_'.$height.(@$options['mode']?'_'.$options['mode']:'').'.'), $pos, strlen('.'));
            }

            if (!file_exists($newpath)) {
                if (!File::isDirectory($newpath)) { 
                    
                    File::makeDirectory(dirname($newpath), 0777, true, true);
                    Resizer::open($_path)->resize($width,$height,$options)->save($newpath, 70);
                }
            }
            $outraw=explode('storage',$newpath);
            $pathraw=explode('storage',$path);
            return $pathraw[0].'storage'.$outraw[1];
        }else{
            return $path;
        }
    }
}
