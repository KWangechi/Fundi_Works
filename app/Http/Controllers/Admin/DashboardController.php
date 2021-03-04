<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

$users = User::all();

        return view('admin.users')->with('users', $users);
    }


    public function userEdit(Request $request, $id){

        $users = User::findOrFail($id);
        return view('admin.adminedit')->with('users', $users);


    }



    public function userUpdate(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('username');
        $users->email = $request->input('email');
        $users->usertype = $request->input('usertype');
        $users->phone = $request->input('number');

        $users->update();

        return redirect('users')->with('status', 'You have successfully editted your information!!');


    }
    
    public function userDelete($id){

        $users = User::findOrFail($id);
      //  $users = User::all();
        
        /*
        $users->name = $request->input('username');
        $users->email = $request->input('email');
        $users->usertype = $request->input('usertype');
        $users->phone = $request->input('number');
*/

        $users->delete();

        return redirect('users')->with('status', 'You have successfully deleted a user!!');


    }
}
