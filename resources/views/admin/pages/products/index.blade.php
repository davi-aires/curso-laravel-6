@extends('admin.layouts.app')

@section('title', 'Admin Page')

@section('content')
    <h1>Exibindo produtos!</h1>
    <a href="{{route('products.create')}}" class="btn btn-dark">Cadastrar produto</a>

    <hr>

    <form action="{{  route('products.search') }}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filter" placeholder="Filtrar:" class="form-control" value="{{$filters['filter'] ?? ""}}">
        <button type="submit" class="btn btn-info">Filtrar</button>
    </form>

    <hr>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th width="100">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                    <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                    <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>

    @if (isset($filters))
        {!! $products->appends($filters)->links() !!}
    @else
        {!! $products->links() !!}
    @endif


@endsection









