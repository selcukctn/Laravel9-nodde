<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Noddes;
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
    public function createpost(){
        $data=Noddes::all();
        $datalist=Category::all();
        return view('createpost.index', ['data'=>$data, 'datalist'=>$datalist]);
    }

}
