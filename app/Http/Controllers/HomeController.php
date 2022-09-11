<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

 function Home(){return view('index');}

 function About(){return view('about');}

 function Products(){return view('products');}

}
