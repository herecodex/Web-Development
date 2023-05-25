<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

    //public function index(){
        //return view("pages.index");
    //}  
{
    
    public function index(){
        //returns view("pages.index"); --> Original Code
        $title = "Welcome to Laravel!";
        return view("pages.index")->with('title', $title);
    }

    public function about(){
        //return view("page.about"); --> Original Code
        $title = "About Us";
        return view ("pages.about")->with('title', $title);
    }
    public function services(){
        //return view("pages.services"); --> Original Code
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']  
        );
        return view('pages.services')->with($data);
    }
}
