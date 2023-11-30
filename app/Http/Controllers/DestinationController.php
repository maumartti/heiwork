<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use App\Country;
use App\Tools;

class DestinationController extends Controller
{
	public function index(Request $request){
		$tools = New Tools;
		$destinations = Destination::all();
		foreach ($destinations as $key => $value) {
			$destinations[$key]->link = $tools->eliminar_tildes($value->title);
			$destinations[$key]->link = str_replace(' ','-',mb_strtolower($destinations[$key]->link));
			$destinations[$key]->countryCode = Country::where('id',$value->country_id)->select('code')->first();
			$destinations[$key]->countryCode = strtolower($destinations[$key]->countryCode->code);
		}
		return $destinations;
	}
    public function store(Request $request){
    	$data = $request->all();
    	
    	if($request->image != null && $request->image != 'null'){
    		//guardamos imagen server
    		$tools = New Tools;
    		$data['image'] = $tools->saveImage64('/images/destinations/',$request->image);
        }

		$destination = Destination::create($data);
		$destination->save();
	}
	public function show(Request $request){
		$destination = Destination::find($request->route('AppDestination'));
		return $destination;
	}
	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$destination = Destination::find($request->route('AppDestination'));
		$tools->deleteImage('/images/destinations/', $destination->image);

		if($request->image != null && $request->image != 'null'){
			//guardamos imagen		
			$data['image'] = $tools->saveImage64('/images/destinations/', $request->image);	
		}
		unset($data['link']);
		unset($data['countryCode']);
		Destination::find($request->route('AppDestination'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$destination = Destination::find($request->route('AppDestination'));
		if($destination){
			$destination->delete();
			$tools->deleteImage('/images/destinations/', $destination->image);
			return $destination;
		}
	}
}
