@extends('layouts.template')
@section('contenu')
<p>Message reçu !</p>
Votre nom est: {{$inputs["nom"]}} <br>
Votre prénom est: {{$inputs["prenom"]}} <br>
Votre adresse email est : {{$inputs["email"]}} <br>
Votre message est : {{$inputs["message"]}}
@endsection
