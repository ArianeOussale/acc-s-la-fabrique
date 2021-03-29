<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function user_store(){
    $data=request()->validate([
        'nom' => ['required', 'string', 'max:255'],
        'prenom' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
      ]);
       
         User::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'email' => $data['email'],
         'password' => Hash::make($data['password']),
        'statut' => 0,
         'role' => 0,
    ]);
        Session::flash('message', 'vous êtes inscrit(es) avec succes!'); 
        Session::flash('alert-class', 'alert-success text-center'); 
        return redirect()->route('accuse');
	}
    
    public function apres_inscription(){
        return view('apprenant.accuse');
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function users_valid(){
        
        $users= User::latest()->where('id', '!=', 1)
                            ->where('statut', 1)->paginate(5);
        $nombres= User::latest()->where('id', '!=', 1)->where('statut', 0);
        return view('admin.user_valid', compact('users', 'nombres'));
    }

     public function users_invalid(){
        
        $users= User::latest()->where('id', '!=', 1)
                            ->where('statut', 0)->paginate(5);
        return view('admin.user_invalid', compact('users'));
    }

// Validation et rejet des inscriptions

    public function validate_inscrit($id)
    {
        User::where('id', $id)->update(['statut' =>1]);

        return redirect()->back();
    }
    
    public function rejet_inscrit($id)
    {
        User::where('id', $id)->update(['statut' => 2]);
        return redirect()->back();
    }


}
