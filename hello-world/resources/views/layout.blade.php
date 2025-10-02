<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <a href="{{Route('inicio')}}">HOME</a> |
        <a href="{{Route('servicos')}}">SERVIÇOS</a> |
        <a href="{{Route('contato')}}">CONTATO</a>

    </header>
    <hr />
    <main>
        @yield('content')
    </main>
    <hr />
    <footer>Rodapé</footer>
</body>
</html>
