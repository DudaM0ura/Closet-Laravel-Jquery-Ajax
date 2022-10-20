@extends('layout.layout')
@section('content')
    
<h2>Editar peça de roupa:</h2>
<form action="{{route('update.closet', $roupa->id)}}" method="post">
    @csrf
    @method('put')
    <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="Peça" name="peca" value="{{$roupa->peca}}">
        <label for="floatingInput">Peça</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="marca" placeholder="Marca" value="{{$roupa->marca}}">
        <label for="floatingPassword">Marca</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="tamanho" placeholder="Tam" value="{{$roupa->tamanho}}">
        <label for="floatingPassword">Tamanho</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="cor" placeholder="Cor" value="{{$roupa->cor}}">
        <label for="floatingPassword">Cor</label>
    </div>
    <button type="submit" class="btn btn-outline-dark">Atualizar Closet</button>
</form>

@endsection