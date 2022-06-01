<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Noddes;
use http\Params;
use Illuminate\Http\Request;
use  Illuminate\Contracts\Queue\QueueableCollection;

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
        return view('createpost.index', ['data'=>$data]);
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
        return view('createpost.create', ['data'=>$data,'datalist'=>$datalist]);
    }
    /**public function create()
    {
        $data=Noddes::all();
        $datalist=Category::all();
        return view('createpost.create', ['data'=>$data,'datalist'=>$datalist]);
    }**/

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
        return redirect('createpost');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noddes  $nodde
     * @return \Illuminate\Http\Response
     */
    public function show(Noddes $noddes, $id)
    {
        $data=Noddes::find($id);
        return view('createpost.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noddes  $nodde
     * @return \Illuminate\Http\Response
     */
    public function edit(Noddes $noddes,$id)
    {
        $data=Noddes::find($id);
        $datalist=Category::all();
        return view('createpost.edit', [
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noddes  $nodde
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
        return redirect('createpost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noddes  $nodde
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Noddes $nodde,$id)
    {
        $data=Noddes::find($id);
        $data->delete();
        return redirect('createpost');
    }
}
