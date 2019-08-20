<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    public static function base64toImage($image){
    	$ext1 = explode(';base64,', $image);
    	$ext = explode('/', $ext1[0]);
    	$extencion = $ext[1]; 
        $image = str_replace('data:image/'.$extencion.';base64,', '', $image);
        if($extencion=='jpeg'){$extencion='jpg';}
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(16).'.'.$extencion;
        return array('image' => $image, 'imageName' => $imageName);
    }
    public static function deleteImage($filepath,$fileName){
	    $old_image = $filepath.$fileName;
	    if (file_exists($old_image)) {
	       @unlink($old_image);
	    }
	}
}
