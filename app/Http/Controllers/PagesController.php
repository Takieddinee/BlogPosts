<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome Home';
        
        return view ('pages.index')->with('title',$title);
    }
    public function about(){
        $title='About Page';
        return view ('pages.about',compact('title'));
    }
    public function services(){
        $data=array(
            'title'=> 'Services Page',
            'services'=> ['lets','try','loops','in','php :D']
        );
        return view ('pages.services')->with($data);
    }
}
