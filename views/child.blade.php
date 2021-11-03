<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
@parent
<p>This is appended to the master sidebar.</p>
<p>La palabra "Hola" tiene {{ strlen("Hola") }} letras</p>
<p>La variable @{{$input}} es {{$input}}</p>
@endsection

@section('content')
<p>This is my body content.</p>
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


