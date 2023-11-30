<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Tools;

class CityController extends Controller
{
	public function index(Request $request){
		$cities = City::all();
		return $cities;
	}
    public function store(Request $request){
    	$data = $request->all();

    	
    	if($request->image != null && $request->image != 'null'){
    		//guardamos imagen server
    		$tools = New Tools;
    		$data['image'] = $tools->saveImage64('/images/cities/',$request->image);
        }

		$city = City::create($data);
		$city->save();
	}
	public function show(Request $request){
		$city = City::find($request->route('AppCity'));
		return $city;
	}
	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$city = City::find($request->route('AppCity'));
		$tools->deleteImage('/images/cities/', $city->image);

		if($request->image != null && $request->image != 'null'){
			//guardamos imagen		
			$data['image'] = $tools->saveImage64('/images/cities/', $request->image);	
		}

		City::find($request->route('AppCity'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$city = City::find($request->route('AppCity'));
		if($city){
			$city->delete();
			$tools->deleteImage('/images/cities/', $city->image);
			return $city;
		}
	}
}
