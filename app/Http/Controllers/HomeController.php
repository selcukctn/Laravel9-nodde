<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view(view:'home.index');
    }
    public function category(){
        return view(view:'category.index');
    }
    public function createpost(){
        return view(view:'createpost.index');
    }

}
