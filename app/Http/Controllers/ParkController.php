<?php

namespace App\Http\Controllers;

use App\Park;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    public function index()
    {
    	$parks = Park::with('counties')->get();

    	return view('parks.index', ['parks' => $parks]);
    }

    public function show($slug)
    {
    	$park = Park::with('references')->where('slug', '=', $slug)->firstOrFail();

    	return view('parks.show', ['park' => $park]);
    }

}
