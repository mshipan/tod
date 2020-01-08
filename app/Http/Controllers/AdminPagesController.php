<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageInfo;
use Image;
use App\PackageImage;

class AdminPagesController extends Controller
{
    public function index()
    {
    	return view('admin.pages.index');
    }

    public function package_create()
    {
    	return view('admin.pages.package.create');
    }

   
}
