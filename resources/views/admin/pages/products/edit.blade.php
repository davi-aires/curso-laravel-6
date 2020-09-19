@extends('admin.layouts.app')

@section('title', 'Editar produto')

@section('content')
<h1>Editar produto {{ $id }}</h1>
<form action="{{ route('products.update', $id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put"> {{-- OU @method('put') --}}
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="desc" placeholder="Descrição">
        <button type="submit">Enviar</button>
    </form>
@endsection