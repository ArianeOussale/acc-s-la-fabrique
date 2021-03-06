<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
         if(Auth::user()->statut!=1){
            $this->guard()->logout();
            Session::flash('message', 'Ce compte est non activé !'); 
            Session::flash('alert-class', 'alert-danger text-center'); 
            return '/login';
        }

        if(Auth::user()->role==1){
            Session::flash('message', 'Bienvenue admin'); 
            Session::flash('alert-class', 'alert-primary text-center'); 
            return '/admin';
        }

        else{
             
            Session::flash('message', 'Bienvenue dans ton espace membre!'); 
            Session::flash('alert-class', 'alert-danger text-center'); 
            return '/espace';
        }


    } 

    // protected function redirectTo()
    // {
    //     if(Auth::user()->statut!=1){
    //         $this->guard()->logout();
    //         Session::flash('message', 'Ce compte est non activé !'); 
    //         Session::flash('alert-class', 'alert-danger text-center'); 
    //         return '/login';
    //     }
    // } 


    //  protected function redirectTo()
    // {
    //     if(Auth::user()->statut!=1){
    //         Session::flash('message', 'Bienvenue'); 
    //         Session::flash('alert-class', 'alert-primary text-center'); 
    //         return '/admin/users';
    //     }
    //     else{
    //         $this->guard()->logout();
    //         Session::flash('message', 'Ce compte a été desactivé !'); 
    //         Session::flash('alert-class', 'alert-danger text-center'); 
    //         return '/login';
    //     }
    // } 
}
