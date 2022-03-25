{{-- Este es un comentario dentro de la plantilla --}}
@extends('app')

@section('title', 'Page Title')

@section('sidebar')
@parent
<img src="@asset('public/assets/img/circle.jpg')" width="50" height="60">
<p>Concateno esta línea al contenido de la plantilla heredada</p>
<p>La palabra "Hola" tiene {{ strlen("Hola") }} letras</p>
<p>La variable @{{$input}} es {{$input}} y en mayúsculas se escribe {{$input | strtoupper}}</p>
@endsection

@section('content')
<p>Repetición de colores con estructuras control</p>
@foreach ($colores as $color)
<p>Pinto el color {{ $color }}</p>
@endforeach
<p>Repetición de colores con plantilla:</p>
@each('color', $colores, 'color')
@endsection

@section('alerta')
@component('alerta',array('title'=>'COMPONENT #1','color'=>"red"))
<strong>Ooooops</strong> Algo ha ido mal!
@endcomponent
@endsection

@section('footer')
@include('footer')
@endsection


