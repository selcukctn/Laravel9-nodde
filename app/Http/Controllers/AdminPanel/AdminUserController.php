<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Params;
use Illuminate\Http\Request;
use  Illuminate\Contracts\Queue\QueueableCollection;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Request
     */
    public function index()
    {
        $data=User::all();
        return view('admin.users.index', ['data'=>$data]);
    }

    public function update(Request $request, User $User,$id)
    {
        $data=User::find($id);
        $data->name = $request->name;
        $data->role = $request->role;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect('admin/users');
    }
    public function edit(User $User,$id)
    {
        $data=User::find($id);
        return view('admin.users.edit', [
            'data'=>$data,
        ]);
    }
    public function destroy(Request $request, User $User,$id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('admin/iletisim');
    }
}
