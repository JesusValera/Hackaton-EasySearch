@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <img src="/img/easysearch.png" alt="logo">
                </div>
            </div>
            <div class="row mt-5 searchcontainer">
                <div class="col-md-12">
                    <h3> Train </h3>
                    <form class="" role="form" action="/trains">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> FROM </label> <!-- ciudad origen-->
                                    <select id="ciudad_origen" class="form-control" name="idorigen">
                                        @foreach($cities as $city)
                                            <option value="{{ $city-> id }}">{{ $city-> nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" >
                                    <label> TO </label>  <!-- ciudad destino-->
                                    <select class="form-control" id="ciudad_destino" name="iddestino">
                                        <ul>
                                            @foreach($cities as $city)
                                            <option value="{{ $city-> id }}">{{ $city-> nombre }}</option>
                                            @endforeach
                                        </ul>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" >
                                    <label> WHEN </label>
                                    <input class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3"  style="padding-top:30px;">
                                <button type="submit" class="btn btn-info"> SEARCH</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-5 searchcontainer">
                <div class="col-md-12">
                    <h3> Hotel </h3>
                    <form class="" role="form" action="/hotels">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> CITY </label> <!-- ciudad origen-->
                                    <select id="ciudad_origen" class="form-control" name="idciudad">
                                        @foreach($cities as $city)
                                            <option value="{{ $city-> id }}">{{ $city-> nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" >
                                    <label> FROM </label>
                                    <input class="form-control" id="fecha_inicio">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" >
                                    <label> TO </label>
                                    <input class="form-control" id="fecha_fin">
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-top:30px;">
                                <button type="submit" class="btn btn-info"> SEARCH</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
