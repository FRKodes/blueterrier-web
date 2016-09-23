<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function home()
    {
    	return View('pages.home');
    }

    public function about()
    {
    	return View('pages.about');
    }

    public function works()
    {
    	return View('pages.works');
    }
    
    public function services()
    {
    	return View('pages.services');
    }
    
    public function contact()
    {
    	return View('pages.contact');
    }

}
