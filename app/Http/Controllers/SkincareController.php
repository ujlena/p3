<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index() 
    {
    	# "Main Page: Show a form to collect data from user."

        return view("skincare.index");

    }

    public function showAll()
    {
        # "Show all skincare products from JSON file."

        $jsonPath = database_path("products.json");
        $productsJson = file_get_contents($jsonPath);
        $products = json_decode($productsJson);

        return view("skincare.showAll")->with([
            "products" => $products
        ]);
    }

    public function matchProducts(Request $request) 
    {
    	# "Filter matching values to give users result."

        # Validation
        $this->validate($request, [
            "producttypes" => "required",
            "skintype" => "required",
            "pricerange" => "numeric|min:10|max:100"
        ]);


        # LOGIC for filtering matching values
        $matchingResultArr = []; # store result

        #user inputs
        $pType = $request->input('producttypes'); 
        $sType = $request->input('skintype'); 
        $pRange = $request->input('pricerange'); 

        $jsonPath = database_path("products.json");
        $products = json_decode(file_get_contents($jsonPath));

        foreach ($products as $index => $item) {
            if ($pType == $index) { 
                foreach ($item as $idx => $val) {
                    if( (in_array($sType, $item[$idx]->skintype))
                        && ($pRange >= $item[$idx]->price) ) {                    
                        $matchingResultArr[$index] = $item; 
                    }
                } #end foreach
            } #end if
        } #end foreach

        return view("skincare.matchProducts")->with([
            "matchingResult" => $matchingResultArr
        ]);
    }

    
}
