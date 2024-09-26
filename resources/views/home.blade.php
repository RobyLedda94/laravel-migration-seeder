@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Trains</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($trains as $train)
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2>{{$train->company}}</h2> 
                                </div>
                                <div class="card-body">
                                    <p>{{ $train->departure_station}}</p>
                                    <p>{{$train->arrival_station}}</p>
                                    <p>{{$train->departure_time}}</p>
                                    <p>{{$train->arrival_time}}</p>
                                    <p>{{$train->train_code}}</p>
                                    <p>{{$train->carriage_number}}</p>
                                    <p>{{$train->on_time}}</p>
                                    <p>{{$train->cancelled}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection