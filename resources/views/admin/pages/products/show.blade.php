@extends('admin.layouts.app')

@section('title', 'Detalhes de produtos')

@section('content')
    <h1>Produto {{ $product->name }}</h1>

    <ul>
        <li><strong>Nome: </strong>{{ $product->name }}</li>
        <li><strong>Preço: </strong>{{ $product->price }}</li>
        <li><strong>Descrição: </strong>{{ $product->desc }}</li>
    </ul>
    <hr>
    <a href="{{route('products.index')}}" class="btn btn-dark">Voltar</a>
    <hr>
    <form action="{{  route('products.destroy', $product->id)  }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar produto</button>
    </form>
@endsection