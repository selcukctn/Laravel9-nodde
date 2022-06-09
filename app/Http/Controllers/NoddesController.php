<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\comments;
use App\Models\Noddes;
use http\Params;
use Illuminate\Http\Request;
use  Illuminate\Contracts\Queue\QueueableCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class NoddesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Request
     */
    public function index()
    {
        $data=Noddes::all();
        $datalist=Category::all();
        return view('createpost.index', ['data'=>$data, 'datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Noddes::all();
        $datalist=Category::all();
        return view('createpost.index', ['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Noddes();
        $data->category_id=$request->category_id;
        $data->user_id=Auth::id() ? Auth::id() : 0;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->status = false;
        if($request->file('file')){
            $data->file=$request->file('file')->store('noddefiles');
        }
        $data->save();
        return redirect('category');
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

        return redirect()->route('/createpost/show/',['id'=>$request->input('noddes_id')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noddes  $noddes
     * @return \Illuminate\Http\Response
     */
    public function show(Noddes $noddes, $id)
    {
        $datalist=Category::all();
        $data=DB::table('noddes')->where('id',$id)->get();
        return view('postview.index',[
                'data'=>$data,'datalist'=>$datalist
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noddes  $noddes
     * @return \Illuminate\Http\Response
     */
    public function edit(Noddes $noddes,$id)
    {
        $data=Noddes::find($id);
        $datalist=Category::all();
        return view('admin.noddes.edit', [
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noddes  $noddes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noddes $noddes,$id)
    {
        $data=Noddes::find($id);
        $data->category_id=$request->category_id;
        $data->user_id=0;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->status = $request->status;
        if($request->file('file')){
            $data->file=$request->file('file')->store('noddefiles');
        }
        $data->save();
        return redirect('admin/noddes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noddes  $noddes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Noddes $noddes,$id)
    {
        $data=Noddes::find($id);
        $data->delete();
        return redirect('admin/noddes');
    }
}
