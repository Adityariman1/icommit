<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role()
    {
        $role=Auth::user()->role;

        if($role=='admin') {
            return view('dashboard');
        } else {
            return view('dashboard');
        }
    }
}