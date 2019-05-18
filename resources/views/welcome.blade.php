@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <ul>
                @foreach($cities as $city)
                    <li>{{ $city->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
