@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
<h1>Cadastrar produto!</h1>

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        
    @include('admin.pages.products._partials.form')
        
</form>
    <hr>
    <a href="{{route('products.index')}}" class="btn btn-dark">Voltar</a>
@endsection