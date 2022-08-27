@extends ('layout')

@section('contenu')
<h1> Pour nous contacter appeler au :  {{ request('numero') }} </h1>
<h2>Ou nous appeler aussi : {{$affiche_numero}}</h2>
<?php //echo request('numero');  ?> 

@stop