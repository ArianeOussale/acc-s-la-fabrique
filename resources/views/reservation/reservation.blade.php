@extends('layouts.master')

@section('contenu')


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<script src="{{ asset('js/reservation.js') }}"></script>
<link href="{{asset('/assets/css/reservation.css')}}" rel="stylesheet">
<link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1587270922/datepicker/datedropper.css" rel="stylesheet">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1587268278/datepicker/datedropper.js"></script>
<div class="container mt-100">
    <div class="card">
        <div class="row">
            <div class="col-md-4"> <label>Date d'arrivée</label> <input type="text" class="form-control"> </div>
            <div class="col-md-4"> <label>Date de depart</label> <input type="text" class="form-control"> </div>
            <div class="col-md-4"> <label>Soumettre</label> <button class="btn btn-primary pro-button w-100">Un email de confirmation en cours</i></button> </div>
        </div>
    </div>
</div>
 <script>
 	$(document).ready(function(){

$('input').on('click', function() {

  onclick="javascript:document.getElementById('formulaire').style.visibility='visible';"

});
});

 </script>
 @endsection