<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rule;
use App\Models\Role;
use App\Models\Department;
use DB;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
    }

    public function show($id){
        $user = User::find($id);
        return $user;
    }

    public function departments() {
        $departments = Department::all();
        return $departments;
    }

    public function roles() {
        $roles = Role::all();
        return $roles;
    }

    public function store(Request $request, User $user) {
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->address = $request->input('address');
        $user->house_number = $request->input('house_number');
        $user->postal_code = $request->input('postal_code');
        $user->role = $request->input('role');
        $user->department = $request->input('department');
        
        $user->save();
    }
}
