@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
<h1>Cadastrar produto!</h1>
<form action="{{ route('products.store') }}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="desc" placeholder="Descrição">
        <button type="submit">Enviar</button>
    </form>
@endsection