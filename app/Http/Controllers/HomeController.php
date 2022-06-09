<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\comments;
use App\Models\faq;
use App\Models\Noddes;
use App\Models\Setting;
use Illuminate\Http\Request;
use  Illuminate\Contracts\Queue\QueueableCollection;
use Illuminate\Support\Facades\Auth;
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
        $datalist=Category::all();
        return view('category.index', ['data'=>$data, 'datalist'=>$datalist]);
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
    }/**
     * Display the specified resource.
     *
     * @param  \App\Models\Noddes  $noddes
     * @return \Illuminate\Http\Response
     */
    public function postview(Noddes $noddes, $id){
        $datalist=Category::all();
        $data=DB::table('noddes')->where('id',$id)->get();
        return view('postview.index',[
                'data'=>$data,
                'datalist'=>$datalist
            ]
        );

    }
    public function storecomment(Request $request)
    {
        $data=new comments();
        $data->noddes_id=$request->noddes_id;
        $data->rate=$request->rate;
        $data->user_id=Auth::id() ? Auth::id() : 0;
        $data->comment = $request->comment;
        $data->status = false;
        $data->save();

        return redirect()->route('noddes.noddes_show',['id'=>$request->input('noddes_id')]);
    }


}
