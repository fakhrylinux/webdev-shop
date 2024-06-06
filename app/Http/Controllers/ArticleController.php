<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function list(Request $request);
    {
      return view ('article.list');

    }
    
    function create(Request $request) 
   {
     return view ('article.form');
   }
}

