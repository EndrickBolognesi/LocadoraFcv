@extends('layouts.app', ["current" => "categorias"])

@section('body')
    
    <form action="/categorias" method="POST" class="ui form">
        @csrf
        <div class="ui  segment">
            <div class="field">
              <label for="nomeCategoria">Nome da Categoria</label>
              <input type="text" name="nomeCategoria" placeholder="Categoria" id="nomeCategoria">
            </div>
           
            
            <button class="ui green button" type="submit">Salvar</button>
            <a href="/categorias" class="ui red button" type="cancel">Cancelar</a>
        </div>
    </form>

@endsection