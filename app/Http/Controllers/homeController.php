<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
   function index(){
    return view('Pages.home');
   }
   function About(){
      return view('Pages.about');
     }
     function Contact(){
      return view('Pages.contact');
     }
     function Project(){
      return view('Pages.projects');
     }

  }
