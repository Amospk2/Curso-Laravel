@extends('layouts.App')

@section('title', $event->title)

@section('conteudo')
<div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-cotnainer" class="col-md-6">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><i class="fa fa-location-arrow" aria-hidden="true"> {{$event->city}}</i></p>
                <p class="events-participants"><i class="fa fa-users" aria-hidden="true"></i>x participantes</p>
                <p class="event-owner"><i class="fa fa-user-o" aria-hidden="true"></i>Dono do evento</p>
                <a href="#" class = "btn btn-primary" id="event-submit">Confirmar Presença</a>
                <h3>O evento conta com:</h3>


                @foreach ($event->items as $item)
                <a href="#" class = "btn btn-primary">               
                <span>{{$item}}</span></a>

                @endforeach


            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
</div>
@endsection