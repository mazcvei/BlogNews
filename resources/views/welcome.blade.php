@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BlogNews
                </div>
                <div class="col-12">
                    <div class="links">
                        <a href="https://laravel.com/docs">Nacional</a>
                        <a href="https://laracasts.com">Internacional</a>
                        <a href="https://laravel-news.com">Deportes</a>
                        <a href="https://blog.laravel.com">Ciencia</a>
                        <a href="https://nova.laravel.com">Tecnologia</a>
                        <a href="https://forge.laravel.com">Cultura</a>
                        <a href="https://vapor.laravel.com">Ocio</a>
                        <a href="https://github.com/laravel/laravel">Economía</a>
                    </div>
                </div>

            </div>
        </div>
@endsection
