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
        <?php // foreach train option {?>
        <div class="row trainoption" id="o_idtrain_1" onclick="easysearch.selectTrain(1);">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">15:04 -> 18:05</div>
                    <div class="col-md-6">
                        <div class="row text-center">
                            <div class="col-md-4">170€</div>
                            <div class="col-md-4">200€</div>
                            <div class="col-md-4">210€</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php // end foreach train option {?>

    </div>
@endsection