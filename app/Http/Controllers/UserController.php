<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Patient;

class UserController extends Controller
{
    // This is already done bij the route
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // authenticate loged in user
        $user = auth()->user();
     
        // check if is admin
        if ($user->isAdmin()){
            // Get list of all users
            $users = User::all();

            // get list of all patients
            $patients = Patient::all();

            return view('/index', compact('user', 'users', 'patients'));
        }else{
            return view('/userdash', compact('user'));
        }
    }

    public function users()
    {
        // get list of all users
        $users = User::all();

        return view('user.users', compact('users'));
    }

    public function create()
    {
            return view('user.add-user');
    }

    public function store(Request $request, User $users)
    {
        // hash password
        $request['password'] = Hash::make($request['password']);

        // create new user
        $users->create(request()->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'role_id'=>'2',
        ]));
        return redirect('/users');
    }

    public function edit(User $u)
    {
        return view('user.edit-user', compact('u'));
    }

    public function update(User $u, Request $request)
    {
        // hash password
        $request['password'] = Hash::make($request['password']);

        // update selected user
        $u->update(request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'username'=>'required',
            'password'=>'required',
        ]));

        return redirect('/users');
    }

    public function destroy(User $u)
    {
        // delete selected user
        $u->delete();

        return redirect('/users');
    }
}
