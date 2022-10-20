@extends('layout.layout')
@section('content')
    <h2>Closet</h2>
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Peça</th>
            <th scope="col">Marca</th>
            <th scope="col">Cor</th>
            <th scope="col">Tamanho</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($armario as $roupa)
            <tr id="trindex-{{$roupa->id}}">
                <td>{{$roupa->peca}}</td>
                <td>{{$roupa->marca}}</td>
                <td>{{$roupa->cor}}</td>
                <td>{{$roupa->tamanho}}</td>
                <td>
                    <div class="cont">
                        <a href="{{ route('edit.closet', $roupa->id) }}" class="btn btn-outline-dark">Editar</a>
                    </div>
                    <div class="cont">
                        <button type="button" class="btn btn-outline-danger" onclick="DeletarRoupa({{$roupa->id}})">Excluir</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection