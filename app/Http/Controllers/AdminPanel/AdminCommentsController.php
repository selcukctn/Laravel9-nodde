<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Noddes;
use App\Models\comments;
use http\Params;
use Illuminate\Http\Request;
use  Illuminate\Contracts\Queue\QueueableCollection;
use Illuminate\Support\Facades\Auth;

class AdminCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Request
     */
    public function index()
    {
        $data=comments::all();
        return view('admin.comments.index', ['data'=>$data]);
    }

    public function update(Request $request, Noddes $nodde,$id)
    {
        $data=comments::find($id);
        $data->noddes_id=$request->noddes_id;
        $data->rate=$request->rate;
        $data->user_id=Auth::id() ? Auth::id() : 0;
        $data->comment = $request->comment;
        $data->status = false;
        $data->save();
        return redirect('admin/comments');
    }
    public function edit(comments $comments,$id)
    {
        $data=comments::find($id);
        return view('admin.comments.edit', [
            'data'=>$data,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Noddes $nodde,$id)
    {
        $data=Noddes::find($id);
        $data->delete();
        return redirect('admin/noddes');
    }
}
