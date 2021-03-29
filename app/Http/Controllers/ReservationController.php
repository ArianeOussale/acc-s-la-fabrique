<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function membre()
    {
        return view('apprenant.espace');
    }
     public function espace_reservation()
    {
        return view('reservation.reservation');
    }
}
