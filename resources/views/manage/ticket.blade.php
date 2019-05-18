@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row booking_header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>This is your ticket</h1>
                    </div>
                </div>
                <div class="row booking_container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="" style="font-weight: bold;">Booking reference: </label>
                                    <?php echo $ticket['localizador'];?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="" style="font-weight: bold;">Last name: </label>
                                    <?php echo $ticket['name'];?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="" style="font-weight: bold;">Date: </label>
                                    <?php echo $ticket['date'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <p>* If you book additional travel services for your trip or holidays via these links, you will NOT benefit from rights applying to packages under the Package Travel and Linked Travel Arrangement Regulations 2018.
                Therefore, Eurostar International Limited (‘EIL’) will not be responsible for those additional travel services. In case of problems, please contact the relevant service provider.
                However, if you book additional travel services via these links not later than 24 hours after receiving the confirmation of the booking from EIL, those travel services will become part of a linked travel arrangement. In that case EIL has, as required by the Regulations, protection in place to refund your payments to EIL for services not fully performed because of EIL’s insolvency, and where necessary and where you have bought a return ticket for travel on the Eurostar service, for your repatriation. Please note that this does not provide a refund in the event of the insolvency of the relevant service provider.

                Eurostar International Limited (‘EIL’) has taken out insolvency protection with Zurich.
                Travellers may contact this entity if services are denied because of EIL’s insolvency.
                Note: This insolvency protection does not cover contracts with parties other than EIL, which can be performed despite EIL’s insolvency.
                https://www.legislation.gov.uk/uksi/2018/634/contents/made.</p>
            </div>
        </div>
    </div>
@endsection