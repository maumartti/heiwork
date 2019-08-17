<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
	public function index(){
		$schools = School::all();
		return $schools;
	}
    public function store(Request $request){
    	$data = $request->all();
    	//nombra y guarda image
    	if($request->image != 'null'){
    		$imageName = str_random(16).'.'.$request->image->getClientOriginalExtension();
        	$request->image->move(public_path('images/schools'), $imageName);        	
        	$data['image'] = $imageName;//le ponemos el nombre ceado para guardarlo en BD
        }

		$school = School::create($data);
		$school->save();
	}
	public function show(Request $request){
		$school = School::find($request->route('AppSchool'));
		return $school;
	}
}
