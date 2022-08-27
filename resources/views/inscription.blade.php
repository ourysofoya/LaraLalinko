@extends('layout')

@section ('contenu')

<form action="/actionInscription" method="post">
    {{ csrf_field() }}


    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prenom">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="motdepass" placeholder="Mot de Passe">
    <input type="password" name="motdepass_confirm" placeholder="Confirmer le Mot de Passe">
    <input type="submit" name="envoi" value="Envoyer">

</form>

@stop