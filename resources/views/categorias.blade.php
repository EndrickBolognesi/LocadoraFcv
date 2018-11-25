@extends('layouts.app', ["current" => "categorias"]);

@section('body')

<style>
    .direita {
  position:absolute;
  right: 15px;
  top:10px;
} 
</style>

<div class="ui segment">
        <h4>Cadastro de Categorias  <a href="/categorias/novo" class="ui direita floated small inverted  green button">Cadastrar</a></h4>
    @if (count($cats) > 0)
        
    <table class="ui three column  selectable table ">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da Categoria</th>
                <th class="center aligned" >Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->nome}}</td>
                <td class="center aligned">
                    <a href="/categorias/editar/{{$cat->id}}" class="ui yellow button">Editar</a>
                    <a href="/categorias/apagar/{{$cat->id}}" class="ui red button">Apagar</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection