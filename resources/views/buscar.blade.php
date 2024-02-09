@extends('tela')
@section('content')

<div class="conteiner m-4">
    <form method="get" action="{{route('todos-agencia')}}">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputcodigo" name="nomeCarro" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>

<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Valor</th>
      <th scope="col">alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($agencias as $agenciaArray);
    <tr>
      <th scope="row">{{$agenciaArray->id}}</th>
      <td>{{$agenciaArray->nomeCarro}}</td>
      <td>{{$agenciaArray->marca}}</td>
      <td>{{$agenciaArray->valor}}</td> 
      <td>
        <a href="{{route('alterar-agencia', $agenciaArray->id)}}" >
            <Button type="submit" class="btn btn-primary">alterar</button>
        </a>
        </td>

        <td>
            <form method="POST" Action="{{route('delete-agencia', $agenciaArray->id)}}">
            @method('delete')
            @csrf
            <Button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection