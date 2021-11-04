@extends('layouts.App')

@section('htmlheader_title', 'Index')


@section('links_adicionais')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styles.css">
@endsection

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
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class ="form-control" placeholder="Procurar">

    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por:{{$search}}</h2>
    <a href="/">Ver todos</a>
    @else
        <h2>Proximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos proximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach ($cursos as $item)
            <div class="card col-md-3">
                <img src="/img/events/{{$item->image}}" alt="{{$item->title}}">
                <div class="card-body">
                    <p class="card-date">{{date('d/m/y', strtotime($item->date))}}</p>
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-participants"> x participantes</p>
                    <a href="/events/{{$item->id}}" class="btn btn-primary"> Sabe mais</a>
                </div>
            </div>
        @endforeach
        @if($search && count($cursos) == 0)
            <p>Nenhum evento com nome "{{$search}}" encontrado! <a href="/">Ver todos</a></p>
        @elseif(count($cursos) == 0)
            <p>Nenhum evento disponivel.</p>
        @endif
    </div>
</div>


@endsection