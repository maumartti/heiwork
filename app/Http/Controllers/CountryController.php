<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Tools;

class CountryController extends Controller
{

	public function index(Request $request){
		$countries = Country::all();
		return $countries;
	}
    public function store(Request $request){
    	$data = $request->all();

    	
    	if($request->image != null && $request->image != 'null'){
    		//guardamos imagen server
    		$tools = New Tools;
    		$data['image'] = $tools->saveImage64('/images/countries/',$request->image);
        }

		$country = Country::create($data);
		$country->save();
	}
	public function show(Request $request){
		$country = Country::find($request->route('AppCountry'));
		return $country;
	}
	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$country = Country::find($request->route('AppCountry'));
		$tools->deleteImage('/images/countries/', $country->image);

		if($request->image != null && $request->image != 'null'){
			//guardamos imagen		
			$data['image'] = $tools->saveImage64('/images/countries/', $request->image);	
		}

		Country::find($request->route('AppCountry'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$country = Country::find($request->route('AppCountry'));
		if($country){
			$country->delete();
			$tools->deleteImage('/images/countries/', $country->image);
			return $country;
		}
	}
}
