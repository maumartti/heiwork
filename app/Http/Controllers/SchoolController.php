<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Tools;

class SchoolController extends Controller
{
	//public $tools = New Tools();

	public function index(){
		$schools = School::all();
		return $schools;
	}
    public function store(Request $request){
    	$data = $request->all();

    	
    	if($request->image != null && $request->image != 'null'){
    		/**** OBTENEMOS Y GUARDAMOS LA FOTO BASE 64 *****/
    		$tools = New Tools;
	        $dataImg = $tools->base64toImage($request->image);//ingresa el base64 y retorna la imagen + nombre random 16
	        file_put_contents(public_path().'/images/schools/'.$dataImg['imageName'], base64_decode($dataImg['image']));
	        $data['image'] = $dataImg['imageName'];//renombramos con el nuevo nombre de imagen al objeto		   
	        /***** END GUARDAMOS FOTO SERVER ***/
        }

		$school = School::create($data);
		$school->save();
	}
	public function show(Request $request){
		$school = School::find($request->route('AppSchool'));
		return $school;
	}
	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$school = School::find($request->route('AppSchool'));
		$tools->deleteImage(public_path().'/images/schools/', $school->image);

		if($request->image != null && $request->image != 'null'){		

	        $dataImg = $tools->base64toImage($request->image);//ingresa el base64 y retorna la imagen + nombre random 16
	        file_put_contents(public_path(). '/images/schools/' . $dataImg['imageName'], base64_decode($dataImg['image']));
	        $data['image'] = $dataImg['imageName'];//renombramos con el nuevo nombre de imagen al objeto		
		}

		School::find($request->route('AppSchool'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$school = School::find($request->route('AppSchool'));
		if($school){
			$school->delete();
			$tools->deleteImage(public_path().'/images/schools/', $school->image);
			return $school;
		}
	}

}
