<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Tools;

class UserController extends Controller
{


    public function store(Request $request){
    	$data = $request->all();
    	$request->validate([
    		'name' => 'string | required',
    		'email' => 'email | required | unique:users',
    		'password' => 'required | confirmed',
    		'type' => 'required'
    	]);

    	/*guardamos la imagen*/
    	if($request->image != null && $request->image != 'null'){
    		$tools = New Tools;
    		$data['image'] = $tools->saveImage64('/images/users/',$request->image);
		}

    	$data['password'] = bcrypt($request->password);

    	$user = User::create($data);
    	$user->save();
    }
/*
    public function show(Request $request){
    	$idCompany = $request->route('AppUser');
    	$users = User::where('company_id',$idCompany)->get();
    	$company = Company::find($idCompany);
    	return array($users, $company);
    }
*/
    public function show(Request $request){
		$user = User::find($request->route('AppUser'));
		return $user;
	}

	public function update(Request $request){
		$tools = New Tools;
		$data = $request->all();

		//borramos la imagen que ya tiene del servidor
		$user = User::find($request->route('AppUser'));
		$tools->deleteImage('/images/users/', $user->image);

		if($request->image != null && $request->image != 'null'){
			//guardamos imagen		
			$data['image'] = $tools->saveImage64('/images/users/', $request->image);	
		}

		if(isset($data['password']) && $data['password'] != ''){ 
			$data['password'] = bcrypt($data['password']);
		}else{
            $data['password'] = $user->password;
        }

		User::find($request->route('AppUser'))->update($data);
	}
    public function destroy(Request $request){
    	$tools = New Tools;
    	$id = $request->route('AppUser');
    	$user = User::find($id);
    	if($user){
    		$user->delete();
    		$tools->deleteImage('/images/user/',$user->image);
    		return $user;
    	}
    }
}
