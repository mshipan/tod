<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Hotel;

class PagesController extends Controller
{
	// Function for Homepage
    public function index()
    {
    	return view('pages.home');
    }

    // Function for Tour Package Page
    public function tourpackages()
    {
    	
    	return view('pages.tourpackages');
    }

    // Function for show Tour Package Page
    public function showpackages()
    {
    	return view('pages.showpackage');
    }

    // Function for Hotel page
    public function aboutus()
    {
    	
    	return view('pages.aboutus');
    }

    // Function for Blog page
    public function blogs()
    {
    	return view('pages.blog');
    }

    // Function for Contact Page
    public function contact()
    {
    	return view('pages.contact');
    }

    public function packages()
    {
        
    }
}
