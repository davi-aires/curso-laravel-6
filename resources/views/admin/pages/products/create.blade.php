@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
<h1>Cadastrar produto!</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}">
        <input type="text" name="desc" placeholder="Descrição" value="{{old('desc')}}">
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
@endsection