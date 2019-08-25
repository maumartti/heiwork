<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    public static function saveImage64($path,$image){
    	$ext1 = explode(';base64,', $image);
    	$ext = explode('/', $ext1[0]);
    	$extencion = $ext[1]; 
        $image = str_replace('data:image/'.$extencion.';base64,', '', $image);
        if($extencion=='jpeg'){$extencion='jpg';}
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(16).'.'.$extencion;
        //guardamos
        file_put_contents(public_path().$path.$imageName, base64_decode($image));
        return $imageName;
    }
    public static function deleteImage($path,$fileName){
	    $old_image = public_path().$path.$fileName;
	    if (file_exists($old_image) && $fileName != 'null' && $fileName != null) {
	        unlink($old_image);
	    }
	}
}
