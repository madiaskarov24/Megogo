<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'RouteServiceProvider::HOME';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function index()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        {
            request()->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                $user = Auth()->user();
                $role = $user->role;
                $id = $user->id;
                session()->put('user_id', $id);
                session()->put('email', $user->email);
                session()->put('role', $user->role);

                if ($role == "user") {
                    return redirect()->to('content');
                }
                elseif ($role == "admin") {
                    return redirect()->to('admin');
                }

            }
            return redirect()->to("login")->withSuccess('Oops! You have entered invalid credentials');
        }
    }

    public function logout() {
        session()->flush();
        Auth::logout();
        return Redirect('login');
    }


}
