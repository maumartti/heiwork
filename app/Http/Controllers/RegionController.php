<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Tools;

class RegionController extends Controller
{
	public function index(Request $request){
		$regions = Region::all();
		return $regions;
	}
    public function store(Request $request){
    	$data = $request->all();
    	
    	if($request->image != null && $request->image != 'null'){
    		//guardamos imagen server
    		$tools = New Tools;
    		$data['image'] = $tools->saveImage64('/images/regions/',$request->image);
        }

		$region = Region::create($data);
		$region->save();
	}
	public function show(Request $request){
		$region = Region::find($request->route('AppRegion'));
		return $region;
	}
	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$region = Region::find($request->route('AppRegion'));
		$tools->deleteImage('/images/regions/', $region->image);

		if($request->image != null && $request->image != 'null'){
			//guardamos imagen		
			$data['image'] = $tools->saveImage64('/images/regions/', $request->image);	
		}

		Region::find($request->route('AppRegion'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$region = Region::find($request->route('AppRegion'));
		if($region){
			$region->delete();
			$tools->deleteImage('/images/regions/', $region->image);
			return $region;
		}
	}
}
