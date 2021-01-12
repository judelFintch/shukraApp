<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
        switch (Auth::user()->role) {
            case 3:
                # code...
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;

                case 2:
                # code...
            $this->redirectTo = '/manager';
            return $this->redirectTo;
                break;

                case 1:
                # code...
            $this->redirectTo = '/user';
            return $this->redirectTo;
                break;
                $this->redirectTo = '/login';
            return $this->redirectTo;
            
            default:
                # code...
                break;
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
