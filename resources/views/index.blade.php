@extends('layouts.app', ["current" => "inicio"]);

@section('body')
<div class="ui cards">

    <div class="card">
      <div class="content">
        <div class="header">Cadastro de Carros</div>
        <div class="description">
        </div>
      </div>
      <a href="/carros" class="ui primary bottom attached button">
        <i class="add icon"></i>
        Cadastrar
      </a>
    </div>

    <div class="card">
      <div class="content">
        <div class="header  ">Cadastro de Marcas</div>
        <div class="description">
        </div>
      </div>
      <a href="/marcas" class="ui green bottom attached button">
         <i class="add icon"></i>
        Cadastrar
      </a>
    </div>

   
  </div>
@endsection