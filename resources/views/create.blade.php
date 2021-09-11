@extends('layouts.App')

@section('Titulo', 'Index')

@section('conteudo')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar evento</h1>
    <form action="/create/event" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="Title" name ="Title" placeholder="nome do evento">
        </div>


        <div class="form-group">
            <label for="title">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento">
        </div>



    <div class="form-group">
            <label for="title">Evento privado?</label>
           <select name="private" id="private" class="form-control">
            <option value = "0">Não</option>
            <option value = "1">Sim</option>
        </select>
    </div>


        <div class="form-group">
            <label for="title">Descrição do evento</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrição do evento"></textarea>
        </div>

        <input type="submit" class = "btn btn-primary" value="Criar Evento">
    </form>
</div>


@endsection