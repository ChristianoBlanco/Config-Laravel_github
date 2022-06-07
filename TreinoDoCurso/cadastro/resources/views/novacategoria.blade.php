@extends('layouts.app', ["current" => "categorias"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="{{url('/categorias')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria"
                       id="nomeCategoria" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <!-- button type="cancel" class="btn btn-danger btn-sm" onclick="javascript: history.go(-1)">Cancel</!-->
            <a href="{{url()->previous()}}" class="btn btn-danger btn-sm">Cancelar</a>
        </form>

    </div>
</div>

@endsection
