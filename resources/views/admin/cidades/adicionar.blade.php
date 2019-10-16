@extends('layouts.app')
@section('content')

  <<div class="container">
    <h2 class="center">Adicionar Cidades</h2>
    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{route('admin.principal')}}" class="breadcrumb">Inicio</a>
            <a href="{{route('admin.cidades')}}" class="breadcrumb">Lista de Cidades</a>
            <a href="#" class="breadcrumb">Adicionar de Cidades</a>
          </div>
        </div>
      </nav>
    </div>
    
    <div class="row">
      <form method="post" action="{{route('admin.cidades.salvar')}}">
        {{csrf_field()}}
        @include('admin.cidades._form')
        <button class="btn blue">Salvar</button>
      </form>
    </div>
    
  </div>
@endsection