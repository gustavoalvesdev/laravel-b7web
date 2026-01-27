@extends('layout')

@section('title', $title)

@section('content')

<h1>Conheça nossos serviços</h1>
<p>Hoje é dia {{ $currentDate }}</p>
<ul>
    <li>Manutenção de Computadores</li>
    <li>Configuração de Roteadores</li>
    <li>Servidores</li>
</ul>
@endsection
