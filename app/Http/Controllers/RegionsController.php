<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Tools;

class RegionsController extends Controller
{
    public function show(Request $request){
		$regions = Region::where('country_id',$request->route('AppRegion'))->get();
		return $regions;
	}
}
