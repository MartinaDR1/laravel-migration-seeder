@extends('Layout.app')

@section('content')

<div class="jumbo row my-4 ">
  
    <div class="container px-3 text-black">
        <h1>Benvenuto!</h1>
        <h4>Trova i migliori orari, tariffe e destinazioni per i tuoi viaggi in treno</h4>
        <hr class="my-4 py-5">
        <div class="py-5 text-end">
            <h4 class="text-end py-5">Esplora le nostre offerte speciali e prenota il tuo prossimo viaggio oggi stesso.</h4> 

            <button class="btn mx-3" type="button"><a class="btn btn-danger btn-lg" href="{{route('trains')}}" role="button">Scopri di più</a></button>
        </div>
    </div>


</div>
@endsection