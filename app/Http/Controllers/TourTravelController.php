<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourTravelController extends Controller
{
    public function all_tour()
    {
    	return view('admin.all_tour');
    }
    public function add_tour()
    {
    	return view('admin.add_tour');
    }
}
