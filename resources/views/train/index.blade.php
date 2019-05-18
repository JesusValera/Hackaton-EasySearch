@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listado de trenes disponibles:</h1>
            </div>
        </div>
        <div class="row text-center trainoptionheader">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">STANDARD</div>
                            <div class="col-md-4">STANDARD PLUS</div>
                            <div class="col-md-4">BUSINESS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($trains as $date => $data)

            <p style="font-size: 2em;">{{ $date }}</p>

            @foreach($data as $key => $train)
                <div class="row trainoption" id="o_idtrain_{{ $train->id }}">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 trainoptiondesc">
                                {{ date("h:i", strtotime($train->horasalida)) }}
                                ->
                                {{ date("h:i", strtotime($train->horallegada)) }}
                            </div>
                            <div class="col-md-6">
                                <div class="row text-center">
                                    <div class="col-md-4 trainoptionsit" id="o_idtrain_{{ $train->id }}_sit_1"
                                         onclick="easysearch.selectTrain({{ $train->id }},1);">{{ $train->precio1 }}€
                                    </div>
                                    <div class="col-md-4 trainoptionsit" id="o_idtrain_{{ $train->id }}_sit_2"
                                         onclick="easysearch.selectTrain({{ $train->id }},2);">{{ $train->precio2 }}€
                                    </div>
                                    <div class="col-md-4 trainoptionsit" id="o_idtrain_{{ $train->id }}_sit_3"
                                         onclick="easysearch.selectTrain({{ $train->id }},3);">{{ $train->precio3 }}€
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach

        <div class="row">
            <div class="col-md-12 text-right">
                <button class="btn btn-success">Comprar</button>
            </div>
        </div>

    </div>
@endsection