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
    public function eliminar_tildes($cadena){
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        return utf8_encode($cadena);
    }
    public function crearUrlTitle($title){
        $url = $this->eliminar_tildes($title);
        $url = str_ireplace(' ','-',mb_strtolower($url));
        return $url;
    }
    public function str_replace_limit($search, $replace, $string, $limit = 1) {
        $pos = strpos($string, $search);
        if ($pos === false) {
            return $string;
        }
        $searchLen = strlen($search);
        for ($i = 0; $i < $limit; $i++) {
            $string = substr_replace($string, $replace, $pos, $searchLen);
            $pos = strpos($string, $search);
            if ($pos === false) {
                break;
            }
        }
        return $string;
    }
    public static function generateUrl($string, $space="-") {
        $string = Tools::quitarAcentos($string);
        $string = strtolower($string);
        $string = str_replace("?", '', $string);
        $string = str_replace("¿", '', $string);
        $string = str_replace(",", '', $string);
        $string = str_replace(".", '', $string);
        $string = trim($string);//quita espacios inicio y final
        $string = str_replace(" ", $space, $string);
        $string = str_replace("--", $space, $string);
        $string = str_replace("---", $space, $string);
        $string = str_replace("----", $space, $string);
        //return $string;

        $arrNoWord = ['de','es','el','la','con','para','tu','en','y','para','lo','que'];
        $stringArr = explode('-', $string);
        foreach ($stringArr as $key => $value) {//buscamos y quitamos palabras es,el..
            foreach ($arrNoWord as $key2 => $value2) {
                if($value == $value2){
                    unset($stringArr[$key]);
                }
            }    
        }
    
        $res = implode('-', $stringArr);//array a string   
        return $res;
    }
    public function setIDtoH2Titles( $content ) {
        preg_match_all( '/\<(h[2])\>(.*)<\/h[2]>/i', $content, $matches );

        $r = array();
        if( !empty( $matches[1] ) && !empty( $matches[2] ) ){
            $tags = $matches[1];
            $titles = $matches[2];
            foreach ($tags as $i => $tag) {
                $id = str_replace(' ', '-', $titles[$i]);
                $r[] = array( 'link' => $this->quitarAcentos($id), 'title' => $titles[ $i ] );
                $content = str_replace('<h2>'.$titles[$i].'</h2>', '<h2 id="'.$this->quitarAcentos($id).'">'.$titles[$i].'</h2>', $content);
            }
        }
        //dd($r);
        //retorna todo el texto pero con id="soy-titulo-h2" en cada h2 = lugar 0
        //retorna un array con todos los link y titulos h2 en lugar = 1
        return [$content, $r];
    }

    public static function quitarAcentos($cadena){
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        //$cadena = str_replace(',', '', $cadena);
        $cadena = strtolower($cadena);//todo a minuscula
        return utf8_encode($cadena);
    }    
}
