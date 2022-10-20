@extends('layout.layout')
@section('content')
    
<h2>Adicionar nova peça de roupa:</h2>
<form action="{{route('store.closet')}}" method="post" id="formcreate">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="peca" placeholder="Peça">
        <label for="floatingInput">Peça</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="marca" placeholder="Marca">
        <label for="floatingPassword">Marca</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="tamanho" placeholder="Tam">
        <label for="floatingPassword">Tamanho</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="cor" placeholder="Cor">
        <label for="floatingPassword">Cor</label>
    </div>
    <button type="submit" class="btn btn-outline-dark">Adicionar ao closet</button>
</form>

@endsection