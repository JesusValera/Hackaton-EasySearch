@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="row">
                <ul>
                    @foreach($cities as $city)
                        <li>{{ $city->name }}</li>
                    @endforeach
                </ul>
            </div>

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
                        <input id="ciudad_destino">
                        <label> WHEN </label>
                        <input>
                        <button> SEARCH</button>
                    </div>

                    <div> <!-- Buscar hoteles -->
                        <h3> Hotel </h3>
                        <label> CITY </label>
                        <input id="ciudad">
                        <label> FROM </label> <!-- fecha inicio-->
                        <input id="fecha_incio">
                        <label> TO </label> <!-- fecha fin-->
                        <input id="fecha_fin">
                        <button> SEARCH</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
