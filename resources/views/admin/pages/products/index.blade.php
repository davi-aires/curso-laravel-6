@extends('admin.layouts.app')

@section('titleAdm', 'Admin Page')

@section('repeats')
    @isset($produtos)
        Esse vetor existe com os seguintes valores:<br>
        @foreach ($produtos as $produto)
        <p class="@if ($loop->last) last @endif">
            {{ $produto }}
        </p>
        @endforeach
    @endisset
    <hr>
    @forelse ($produtos as $produto)
        <p class="@if ($loop->first) last @endif">
            {{ $produto }}
        </p>
    @empty
        Não há produtos cadastrados
    @endforelse

@endsection

@section('name')
    {{$name}}

    @auth
    @else
        <p>
            Não está logado!
        </p>
    @endauth

    @guest
        <p></p>
        Sabia que não tava logado, seu fracassado!
    @endguest
@endsection

@section('switchTeste')
    <p>
        @switch($teste)
            @case(123)
                <b>var</b> teste é 123 mas é número
                @break
            @case('123')
                <b>var</b> teste é 123 mas é string
                @break
            @default
                N é nada
        @endswitch
    </p>
@endsection

<style>
    .last {
        background: #ccc
    }
</style>