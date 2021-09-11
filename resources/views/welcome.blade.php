@extends('layouts.App')

@section('title', 'Index')

@section('conteudo')

@if (Session::has('msg'))
<div class="alert {{Session::get('class')}} alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
    <h5>Atenção</h5>
    {{Session::get('msg')}}
</div>  
@endif
<div id="search-container" class="col-12-md-12">
    <h1>Buscar</h1>
    <form action="">
        <input type="text" id="search" name="search" class ="form-control" placeholder="Procurar">

    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Proximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($teste as $item)
            <div class="card col-md-3">
                <img src="/img/eventos.jpeg" alt="{{$item->title}}">
                <div class="card-body">
                    <p class="card-date">10/04/2022</p>
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-participants"> x participantes</p>
                    <a href="#" class="btn btn-primary"> Sabe mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection