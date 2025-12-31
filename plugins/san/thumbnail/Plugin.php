<?php namespace San\Thumbnail;

use System\Classes\PluginBase;
use Winter\Storm\Database\Attach\Resizer;
use File;

class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'thumbnail',
            'description' => 'Make thumbnails with using a twig filter and component',
            'author'      => 'ansar',
            'icon'        => 'icon-square'
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'thumbnail' => [$this, 'resizeThumbnail']
            ]
        ];
    }
    public function registerComponents()
    {
        return [
            \San\Thumbnail\Components\Resize::class => 'mediaResize'
        ];
    }
    public function resizeThumbnail($path, $width = 'auto', $height = 'auto', $mode)
    {

       
        $path= url(\System\Classes\MediaLibrary::url($path));
        
        $baseUrl = url('/');
        if (substr($path, 0, strlen($baseUrl)) === $baseUrl) {
            $_path = substr($path, strlen($baseUrl));
            $_path = base_path(ltrim($_path, '/'));
        }
 
        if (file_exists($_path) && strpos(basename($_path),'.') && filesize($_path)<3000000) {
            $newpath=str_replace('media','resized/'.date('m'),$_path);
            $getlastmonth=explode(date('m'),$newpath);
            $getlastmonth=$getlastmonth[0].date("m", strtotime("-31 days"));
            if (File::isDirectory($getlastmonth)) {
                File::deleteDirectory($getlastmonth);
            }
            $pos = strrpos($newpath, '.');
            if($pos !== false)
            {
                $newpath = substr_replace($newpath, ('_'.$width.'_'.$height.(@$mode?'_'.$mode:'').'.'), $pos, strlen('.'));
            }

            if (!file_exists($newpath)) {
                if (!File::isDirectory($newpath)) { 
                    
                    File::makeDirectory(dirname($newpath), 0777, true, true);
                    Resizer::open($_path)->resize($width,$height,['mode'=>$mode])->save($newpath, 90);
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
