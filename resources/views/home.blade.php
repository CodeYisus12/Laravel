@extends('layouts.app')

@section('title', 'Laravel')

@push('css')
    <style>
        body {
            background-color: aliceblue;
        }
    </style>
@endpush

@push('css')
    <style>
        body{
            color:red;
        }
    </style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto px-4">
    {{-- <h1>Bienvenido a la pagina principal</h1> --}}

    <x-alert2 type="dark" class="mb-4">
        <x-slot name="title">
            Titulo de la alerta
        </x-slot>

        Contenido de la alerta
    </x-alert2>
    <p>Hola mundo</p>
</div>
@endsection