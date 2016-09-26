<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
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

    public function aguamaldita()
    {
        return View('projects.agua-maldita');
    }

    public function kamado()
    {
        return View('projects.kamado');
    }

    public function boreal()
    {
        return View('projects.boreal');
    }

    public function sendmail()
    {
        Mail::send('emails.contact', [], function($message){
            $message->to('frkalderon@gmail.com')->subject('Contact from Blue Terrier');
        });        
    }
}
