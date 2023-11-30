<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent;
use App\Country;
use App\Region;
use App\City;
use App\Destination;
use App\Tools;

class ArticleController extends Controller
{
    public function show(Request $request){
    	$tools = New Tools;
    	$title = str_replace('-', ' ', $request->route('destinationTitle'));

    	$destination = Destination::where('title','like','%'.$title.'%')->first();
    	$city = City::where('title','like','%'.$title.'%')->first();
    	$region = Region::where('title','like','%'.$title.'%')->first();
    	$country = Country::where('title','like','%'.$title.'%')->first();
    	$continent = Continent::where('title','like','%'.$title.'%')->first();

    	if($destination){
    		$article = $destination;
    	}else if($city){
    		$article = $city;
    	}else if($region){
    		$article = $region;
    	}else if($country){
    		$article = $country;
    	}else if($continent){
    		$article = $continent;
    	}	
    		//dd($article->description_long);

	    	$article->continents = Continent::all();
	    	$article->countries = Country::all();
	    	if($city || $destination)
	    		$article->regions = Region::where('country_id',$article->country_id)->get();
	    	if($destination){
		    	$article->cities = City::where('country_id',$article->country_id)->get();
		    	$article->destinations = Destination::where('country_id',$article->country_id)->get(); 
			}
			if($region || $city || $destination){
				$countryCode = Country::where('id',$article->country_id)->select('code')->first();
		        $countryCode = strtolower($countryCode->code);
			}

			//*************
	    	$description_long = $article->description_long;
		    if($destination){
		    	foreach ($article->destinations as $key => $destination) {
		    		$urlTitle = '/'.$countryCode.'/'.$tools->crearUrlTitle($destination->title);
		    			$description_long = str_ireplace($destination->name.' ', '<a href="'.$urlTitle.'">'.$destination->name.'</a> ', $description_long);    		
		    		if(!strrpos($description_long, '<a href="'.$urlTitle.'">'.$destination->name.'</a>')){//BUSCA SI YA NO EXISTE UN LINK IGUAL PARA NO REPETIR
		    			$description_long = str_ireplace($destination->name.',', '<a href="'.$urlTitle.'">'.$destination->name.'</a>,', $description_long);
		    			$description_long = str_ireplace($destination->name.'.', '<a href="'.$urlTitle.'">'.$destination->name.'</a>.', $description_long);
		    		}
		    	}
		    	foreach ($article->cities as $key => $city) {
		    		$urlTitle = '/'.$countryCode.'/'.$tools->crearUrlTitle($city->title);
		    		$description_long = $tools->str_replace_limit($city->name.' ', '<a href="'.$urlTitle.'">'.$city->name.'</a> ', $description_long, 1);    
		    		$description_long = $tools->str_replace_limit($city->name.',', '<a href="'.$urlTitle.'">'.$city->name.'</a>,', $description_long, 2);		
		    	}
		    }	
	    	if($city || $destination){
		    	foreach ($article->regions as $key => $region) {
		    		$urlTitle = '/'.$countryCode.'/'.$tools->crearUrlTitle($region->title);
		    		$description_long = $tools->str_replace_limit($region->name.' ', '<a href="'.$urlTitle.'">'.$region->name.'</a> ', $description_long, 1);
		    		$description_long = $tools->str_replace_limit($region->name.',', '<a href="'.$urlTitle.'">'.$region->name.'</a>,', $description_long, 1);    		
		    	}
		    }	
	    	foreach ($article->countries as $key => $country) {
	    		$urlTitle = '/destino/'.$tools->crearUrlTitle($country->title);
	    		$description_long = $tools->str_replace_limit($country->name.' ', '<a href="'.$urlTitle.'">'.$country->name.'</a> ', $description_long, 1);    		
	    		$description_long = $tools->str_replace_limit($country->name.',', '<a href="'.$urlTitle.'">'.$country->name.'</a>,', $description_long, 1); 
	    	}
	    	foreach ($article->continents as $key => $continent) {
	    		$urlTitle = '/destino/'.$tools->crearUrlTitle($continent->title);
	    		$description_long = $tools->str_replace_limit($continent->name.' ', '<a href="'.$urlTitle.'">'.$continent->name.'</a> ', $description_long, 1);  
	    		$description_long = $tools->str_replace_limit($continent->name.',', '<a href="'.$urlTitle.'">'.$continent->name.'</a>,', $description_long, 1);  		
	    	}
	    	$article->description_long = $description_long;
    	
    	//dd($article);
    	return view('home')->with('data',$article);
    }
}
