@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
        <h1>Bienvenido al Catalogo de Productos para el hogar Inteligente</h1>
        <p class="lead">Por favor inicia sesion para comenzar</p>
        @endguest

        @yield('content')



    </div>
@endsection
