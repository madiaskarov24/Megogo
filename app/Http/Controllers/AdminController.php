<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        $user = User::where('id', session()->get('user_id'))->first();
        return view('admin.index', [
            'user' => $user
        ]);
    }
}
