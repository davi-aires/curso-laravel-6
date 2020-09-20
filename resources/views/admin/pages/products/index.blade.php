@extends('admin.layouts.app')

@section('title', 'Admin Page')

@section('content')
    <h1>Exibindo produtos!</h1>
    <hr>
    <a href="{{route('products.create')}}">Cadastrar produto</a>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $products->links() !!}

@endsection









