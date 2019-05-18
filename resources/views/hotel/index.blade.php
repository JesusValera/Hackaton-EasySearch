@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listado de hoteles disponibles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php //foreach hotel result {?>
                    <div class="col-md-4 hotelbox">
                        <div class="row hotelimage">
                            <div class="col-md-12">
                                <img src="img/featured_small.jpg" alt="hotel image">
                            </div>
                        </div>
                        <div class="row hotelname">
                            <div class="col-md-12">
                                NOMBRE HOTEL
                            </div>
                        </div>
                        <div class="row hotelstars">
                            <div class="col-md-12">
                                <svg focusable="false" height="12" viewBox="0 0 20 19" width="12" xmlns="http://www.w3.org/2000/svg" class="sc-15vnj8u-0 frpEQS"><g fill="#FFE600"><polygon points="10 14.0000001 4.12214748 18.0901699 6.19577388 11.236068 0.489434837 6.90983006 7.64885896 6.76393197 10 0 12.351141 6.76393197 19.5105652 6.90983006 13.8042261 11.236068 15.8778525 18.0901699"></polygon></g></svg>
                                <svg focusable="false" height="12" viewBox="0 0 20 19" width="12" xmlns="http://www.w3.org/2000/svg" class="sc-15vnj8u-0 frpEQS"><g fill="#FFE600"><polygon points="10 14.0000001 4.12214748 18.0901699 6.19577388 11.236068 0.489434837 6.90983006 7.64885896 6.76393197 10 0 12.351141 6.76393197 19.5105652 6.90983006 13.8042261 11.236068 15.8778525 18.0901699"></polygon></g></svg>
                                <svg focusable="false" height="12" viewBox="0 0 20 19" width="12" xmlns="http://www.w3.org/2000/svg" class="sc-15vnj8u-0 frpEQS"><g fill="#FFE600"><polygon points="10 14.0000001 4.12214748 18.0901699 6.19577388 11.236068 0.489434837 6.90983006 7.64885896 6.76393197 10 0 12.351141 6.76393197 19.5105652 6.90983006 13.8042261 11.236068 15.8778525 18.0901699"></polygon></g></svg>
                            </div>
                        </div>
                        <div class="row hoteldesc">
                            <div class="col-md-12">
                                <p>Descripción del hotel</p>
                            </div>
                        </div>
                        <div class="row hotelprice">
                            <div class="col-md-12 text-right">
                                260€
                            </div>
                        </div>
                        <div class="row hotelpurchase">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success">Contratar</button>
                            </div>
                        </div>
                    </div>
                    <?php //endforeach?>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <p>All bookings are subject to the relevant terms and conditions made available at the time of booking. A current copy can be found here for hotels and for Train + Hotel packages respectively. For any further questions, please refer to our help pages.</p>
            </div>
        </div>
    </div>
@endsection