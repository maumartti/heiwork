<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent;
use App\Tools;

class ContinentController extends Controller
{
	//public $tools = New Tools();

	public function index(Request $request){
		$continents = Continent::all();
		return $continents;
	}
    public function store(Request $request){
    	$data = $request->all();

    	
    	if($request->image != null && $request->image != 'null'){
    		//guardamos imagen server
    		$tools = New Tools;
    		$data['image'] = $tools->saveImage64('/images/continents/',$request->image);
        }

		$continent = Continent::create($data);
		$continent->save();
	}
	public function show(Request $request){
		$continent = Continent::find($request->route('AppContinent'));
		return $continent;
	}
	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$continent = Continent::find($request->route('AppContinent'));
		$tools->deleteImage('/images/continents/', $continent->image);

		if($request->image != null && $request->image != 'null'){
			//guardamos imagen		
			$data['image'] = $tools->saveImage64('/images/continents/', $request->image);	
		}

		Continent::find($request->route('AppContinent'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$continent = Continent::find($request->route('AppContinent'));
		if($continent){
			$continent->delete();
			$tools->deleteImage('/images/continents/', $continent->image);
			return $continent;
		}
	}

}
