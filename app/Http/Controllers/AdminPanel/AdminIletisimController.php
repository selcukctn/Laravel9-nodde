<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\messages;
use http\Params;
use Illuminate\Http\Request;
use  Illuminate\Contracts\Queue\QueueableCollection;

class AdminIletisimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Request
     */
    public function index()
    {
        $data=messages::all();
        return view('admin.iletisim.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=messages::all();
        return view('admin.iletisim.create', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new messages();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->ip = '121.0.0.1';
        $data->status = false;
        $data->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noddes  $nodde
     * @return \Illuminate\Http\Response
     */
    public function show(messages $message, $id)
    {
        $data=messages::find($id);
        return view('admin.noddes.show', ['data'=>$data]);
    }
    public function destroy(Request $request, messages $message,$id)
    {
        $data=messages::find($id);
        $data->delete();
        return redirect('admin/iletisim');
    }
}
