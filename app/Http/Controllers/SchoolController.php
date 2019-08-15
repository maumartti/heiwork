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
    	
    	//nombra y guarda image
    	if($request->image != 'null'){
    		$imageName = bcrypt(16).'.'.$request->image->getClientOriginalExtension();
        	$request->image->move(public_path('images/schools'), $imageName);
        }

		$school = School::create($request->all());
		$school->save();
	}
	public function show(Request $request){
		$school = School::find($request->route('AppSchool'));
		return $school;
	}
}
