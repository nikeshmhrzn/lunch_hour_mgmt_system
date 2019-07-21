<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/employee';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    // if user is admin redirect to /admin/staffs
    // if user is staff redirect to /staffs
    // if user is employee redirect to /employees
    }

    public function redirectTo(){

        // User role
        $role = \Auth::user()->user_type;

        // Check user role
        switch ($role) {
            case 1:
                    return '/admin/staffs';
                break;
            case 2:
                    return '/staffs/category';
                break;
            default:
                    return '/employee';
                break;
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}
