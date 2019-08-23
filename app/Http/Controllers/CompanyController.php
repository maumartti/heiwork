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
    		/**** OBTENEMOS Y GUARDAMOS LA FOTO BASE 64 *****/
    		$tools = New Tools;
	        $dataImg = $tools->base64toImage($request->image);//ingresa el base64 y retorna la imagen + nombre random 16
	        file_put_contents(public_path().'/images/companys/'.$dataImg['imageName'], base64_decode($dataImg['image']));
	        $data['image'] = $dataImg['imageName'];//renombramos con el nuevo nombre de imagen al objeto		   
	        /***** END GUARDAMOS FOTO SERVER ***/
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
		$tools->deleteImage(public_path().'/images/companys/', $company->image);

		if($request->image != null && $request->image != 'null'){		

	        $dataImg = $tools->base64toImage($request->image);//ingresa el base64 y retorna la imagen + nombre random 16
	        file_put_contents(public_path(). '/images/companys/' . $dataImg['imageName'], base64_decode($dataImg['image']));
	        $data['image'] = $dataImg['imageName'];//renombramos con el nuevo nombre de imagen al objeto		
		}

		Company::find($request->route('AppCompany'))->update($data);
	}
	public function destroy(Request $request){
		$tools = new Tools;
		$company = Company::find($request->route('AppCompany'));
		if($company){
			$company->delete();
			$tools->deleteImage(public_path().'/images/companys/', $company->image);
			return $company;
		}
	}

}
