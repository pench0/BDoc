<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    |    On Credentials:
    |
    |   $loginInput = trim($request->{$this->username()});
    |   $findColumn = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : $this->username();
    |
    |   return [$findColumn => $loginInput, 'password' => $request->password];
    |
    |   On Username:
    |
    |   'username'
    */


    

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
