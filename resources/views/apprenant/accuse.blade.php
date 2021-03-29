@extends('layouts.master')

@section('contenu')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 @if(Session::has('message'))
               <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card-body">
                    <p>
                        Bonjour! votre inscription a été effectuée avec succès. 
                    </p>
                     <p>
                         Pour des mesure de précaution , nous allons verifier vos informations et un email de validation vous sera envoyé au plus 6 h à compter de maintenant.
                     </p>
                     <p>
                       Simplon, vous remercie pour la confiance!
                     Cordialement!  
                     </p>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
