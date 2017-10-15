<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index() 
    {
    	# return "Main Page: Show a form to collect data from user.";
    	return view("skincare.index");
    }

    public function matchProducts() 
    {
    	# return "This Step: Filter matching values."

    	$jsonPath = database_path("products.json");
    	
    	$productsJson = file_get_contents($jsonPath);
    	
    	$products = json_decode($productsJson);

    	return view("skincare.matchProducts")->with([
    		"products" => $products
    	]);

    	
    	
    }
}
