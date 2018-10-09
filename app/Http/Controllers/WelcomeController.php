<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    	//$data ="hello Form Demo";
    	//$data = ['name1' => 'Hello Form Demo', 'name2' => 'Hello World'];
   		//return view('zia', compact('data'));
   		//return view('zia')->with('name', $data);
   		//return view('zia', ['data' => $data]);
   		return view('front.home.home-content');
   		
    }
    public function about(){
    	return view('front.about.about-content');
    }
}
