<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user-view', ['users' => $users]);
    }
    public function delete($id)
    {
        User::find($id)->delete();
        Alert::success('','User Deleted Succesfully');
        return back();
    }
    
}