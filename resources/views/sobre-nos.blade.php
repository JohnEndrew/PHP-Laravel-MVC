@extends('layouts.basico')
@section('titulo','Sobre-Nos')

<header class="cabecalho">
        <img class="cabecalho-imagem" src="img/teste.png" alt="Logo site">
        <h1 class="conteudo-principal-escrito-titulo1">GESTTOQUE</h1>
        <nav class="cabecalho-menu">
            <a class="cabecalho-menu-item" href="{{ route('index') }}">
                <ion-icon name="home-outline"></ion-icon>Pagina Inicial</a>
            <button class="button-acessar" type="submit">Entrar</button>
        </nav>
    </header>
     @include ('layouts.__partials.footer')


