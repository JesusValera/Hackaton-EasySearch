@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                EasySearch
            </div>
            <div class="links">
                <div>
                <h3> Train </h3>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                                    <label> FROM </label> <!-- ciudad origen-->
                                    <select id="ciudad_origen" class="form-control">
                                        @foreach($cities as $city)
                                            <option value="{{ $city-> id }}">{{ $city-> nombre }}</option>
                                        @endforeach
                                    </select>
                        </div>
                        <div class="form-group" >
                                    <label> TO </label>  <!-- ciudad destino-->
                                    <select class="form-control" id="ciudad_destino">
                                        <ul>
                                            @foreach($cities as $city)
                                            <option value="{{ $city-> id }}">{{ $city-> nombre }}</option>
                                            @endforeach
                                        </ul>
                                    </select>
                        </div>
                        <div class="form-group" >
                                    <label> WHEN </label>
                                    <input class="form-control">
                                
                                    <button type="submit" class="btn btn-default"> SEARCH</button>
                        </div>
                    </form>

                    <h3> Hotel </h3>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                                    <label> CITY </label> <!-- ciudad origen-->
                                    <select id="ciudad_origen" class="form-control">
                                        @foreach($cities as $city)
                                            <option value="{{ $city-> id }}">{{ $city-> nombre }}</option>
                                        @endforeach
                                    </select>
                        </div>
                        <div class="form-group" >
                                    <label> FROM </label> 
                                    <input class="form-control" id="fecha_inicio">
                                    
                                    </select>
                        </div>
                        <div class="form-group" >
                                    <label> TO </label>
                                    <input class="form-control" id="fecha_fin">
                                    <button type="submit" class="btn btn-default"> SEARCH</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
