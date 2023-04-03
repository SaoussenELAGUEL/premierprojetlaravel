<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view("accueil");
    }
     public function about(){
        return view("about");
    }
     public function produits(){
        return view("produits");
    }
     public function contact(){
        return view("contact");
    }
      public function save(Request $request){
        $inputs=$request->all();
        return view("save", compact("inputs"));
    }
}
