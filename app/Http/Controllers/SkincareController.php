<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index() 
    {
    	return "Main Page: Show a form to collect data from user.";
    }

    public function matchProducts() 
    {
    	return "This Step: Filter matching values.";
    }
}
