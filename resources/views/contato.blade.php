@extends('layouts.basico')
@section('titulo','Contato')


<body>
    <header class="cabecalho">
        <img class="cabecalho-imagem" src="img/teste.png" alt="Logo site">
        <h1 class="conteudo-principal-escrito-titulo1">GESTTOQUE</h1>
        <nav class="cabecalho-menu">
            <a class="cabecalho-menu-item" href="{{ route('index') }}">
                <ion-icon name="home-outline"></ion-icon>Pagina Inicial</a>
            <a class="cabecalho-menu-item" href="{{ route('Sobre-Nos')}}">
                <ion-icon name="newspaper-outline"></ion-icon>Sobre-nós</a>
            <button class="button-acessar" type="submit"><a href="{{ route('Entrar') }}">Entrar</button></a>
        </nav>
    </header>
    <main class="conteudo">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <img class="imagem21" src="img/chatq.png">
            </div>
            <div class="conteudo-contato">
             @component('layouts.__components.form-contato')
             @endcomponent
            </div>
           </section>
            
    </main>
</head>
<body>
    
</body>
</html>