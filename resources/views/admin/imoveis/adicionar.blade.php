@extends('layouts.app')
@section('content')

  <<div class="container">
    <h2 class="center">Adicionar Imóvel</h2>
    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{route('admin.principal')}}" class="breadcrumb">Inicio</a>
            <a href="{{route('admin.imoveis')}}" class="breadcrumb">Lista de Cidades</a>
            <a href="#" class="breadcrumb">Adicionar de Imovel</a>
          </div>
        </div>
      </nav>
    </div>
    
    <div class="row">
      <form method="post" enctype="multipart/form-data"  action="{{route('admin.imoveis.salvar')}}">
        {{csrf_field()}}
        @include('admin.imoveis._form')
        <button class="btn blue">Salvar</button>
      </form>
    </div>
    
  </div>
@endsection