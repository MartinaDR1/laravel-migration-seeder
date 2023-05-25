@extends('Layout.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 ">

            @forelse ($trains as $train)
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h6 class="card-title">{{$train->train_code}}</h6>
                        <h6 class="card-title">€ <strong class="text-danger">{{$train->price}}</strong></h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{{$train->company}}</h6>

                        <div class="station d-flex py-2">
                            <div class="col-6">
                                <div class="times"><strong class="text-success">{{$train->departure_times}}</strong></div>
                                {{$train->departure_station}}
                            </div>
                            <div class="col-6">
                                <div class="times"><strong class="text-success">{{$train->arrival_times}}</strong></div>
                                {{$train->arrival_station}}
                            </div>
                        </div>
                
                    </div>
                    <div class="card-footer text-end">
                        @if (($train->on_time))
                            <span class="badge text-bg-success">On Time</span>
                            @elseif ($train->cancelled)
                            <span class="badge text-bg-danger">Cancelled</span>
                        @endif
                    </div>
                </div>
            </div>

            @empty
            <div class="col">
                <p>Come back later!</p>
            </div>
            @endforelse

        </div>
    </div>
@endsection