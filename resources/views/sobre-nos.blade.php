@extends('layouts.basico')
@section('titulo','Sobre-Nos')

<header class="cabecalho">
        <img class="cabecalho-imagem" src="img/logo.svg" alt="Logo site">
        <h1 class="conteudo-principal-escrito-titulo1">System Tech</h1>
        <nav class="cabecalho-menu">
            <a class="cabecalho-menu-item" href="{{ route('index') }}">
                <ion-icon name="home-outline"></ion-icon>Pagina Inicial</a>
            <button class="button-acessar" type="submit">Acessar</button>
        </nav>
    </header>
     @include ('layouts.__partials.footer')


