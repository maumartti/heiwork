<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Tools;

class CompanyController extends Controller
{
	//public $tools = New Tools();

	public function index(){
		$companys = Company::all();
		return $companys;
	}
    public function store(Request $request){
    	$data = $request->all();

    	
    	if($request->image != null && $request->image != 'null'){
    		//guardamos imagen server
    		$tools = New Tools;
    		$data['image'] = $tools->saveImage64('/images/companys/',$request->image);
        }

		$company = Company::create($data);
		$company->save();
	}
	public function show(Request $request){
		$company = Company::find($request->route('AppCompany'));
		return $company;
	}
	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$company = Company::find($request->route('AppCompany'));
		$tools->deleteImage('/images/companys/', $company->image);

		if($request->image != null && $request->image != 'null'){
			//guardamos imagen		
			$data['image'] = $tools->saveImage64('/images/companys', $request->image);	
		}

		Company::find($request->route('AppCompany'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$company = Company::find($request->route('AppCompany'));
		if($company){
			$company->delete();
			$tools->deleteImage('/images/companys/', $company->image);
			return $company;
		}
	}

}
