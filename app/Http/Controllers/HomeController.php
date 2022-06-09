<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\faq;
use App\Models\Noddes;
use App\Models\Setting;
use Illuminate\Http\Request;
use  Illuminate\Contracts\Queue\QueueableCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    public function index(){
        $data=Noddes::all();
        return view('home.index', ['data'=>$data]);
    }
    public function category(){
        $data=Noddes::all();
        return view('category.index', ['data'=>$data]);
    }
    public function iletisim(){
        return view('iletisim.index');
    }
    public function hakkimizda(){
        $data=Setting::first();
        return view('layouts.hakkimizda', ['data'=>$data]);
    }
    public function faq(){
        $data=faq::all();
        return view('layouts.faq', ['data'=>$data]);
    }
}
