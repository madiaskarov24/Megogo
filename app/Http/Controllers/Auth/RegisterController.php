<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;




use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        request()->validate([
            'password' => 'required|min:6',
            'name' => 'required',
            'email' => 'required'
        ]);

        $data = $request->all();

        $user = new User;
        $user->name = $data['name'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $user->save();

        return redirect()->to('/login');
    }

    public function createAdmin() {
        return view('admin.create');
    }

    public function storeAdmin(Request $request)
    {
        request()->validate([
            'password' => 'required|min:6',
            'name' => 'required',
            'email' => 'required'
        ]);

        $data = $request->all();

        $user = new User;
        $user->name = $data['name'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $user->role = "admin";
        $user->save();

        return view('home')->with('success', 'created new admin');
    }
}
