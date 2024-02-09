@extends('tela')
@section('content')

<div class="Container">
    <form class="Row g-3" Method="Post" action="{{route('cadastrar-agencia')}}">
    @csrf

<div class="row g-3">
  <div class="col-sm-7">
    <label for="inputNome" class="form-label">Carro</label>
    <input type="text" class="form-control" name="nomeCarro" id="inputNome" >
  </div>
  <div class="col-4">
  <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" class="form-control"  name="marca" id="inpuMarca" >
  </div>
  <div class="col-4">
  <label for="inputValor" class="form-label">Valor</label>
    <input type="text" class="form-control"  name="valor" id="inputValor" >
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
  </form>
</div>
@endsection
