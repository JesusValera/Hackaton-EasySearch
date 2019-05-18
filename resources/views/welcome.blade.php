@extends('layouts.app')

@section('content')
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
                EasySearch
            </div>

            <div class="links">              
                <div>
                        <div> <!-- Buscar trenes -->
                            <h3> Train </h3>
                            <label> FROM </label> <!-- ciudad origen-->
                            <input id="ciudad_origen"> 
                            <label> TO </label>  <!-- ciudad destino-->
                            <input  id="ciudad_destino"> 
                            <label> WHEN </label>
                            <input>
                            <button> SEARCH </button>
                        </div> 

                        <div> <!-- Buscar hoteles -->
                            <h3> Hotel </h3>
                            <label> CITY </label> 
                            <input id="ciudad"> 
                            <label> FROM </label> <!-- fecha inicio-->
                            <input id="fecha_incio"> 
                            <label> TO </label> <!-- fecha fin-->
                            <input id="fecha_fin">
                            <button> SEARCH </button>
                        </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
