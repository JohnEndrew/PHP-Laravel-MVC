@extends('layouts.basico')
@section('titulo','Entrar')

<header class="cabecalho">
        <img class="cabecalho-imagem" src="img/logo.svg" alt="Logo site">
        <h1 class="conteudo-principal-escrito-titulo1">GESTTOQUE</h1>
        <nav class="cabecalho-menu">
            <a class="cabecalho-menu-item" href="{{ route('index') }}">
                <ion-icon name="home-outline"></ion-icon>Pagina Inicial</a>
        </nav>
    </header>
<body>
    <main class="conteudo-login">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito-login">
                <h1 class="conteudo-principal-escrito-titulo-login">Tenha aqui a sua melhor experiencia!</h1>
            </div>
            <div class="conteudo-contato-login">
                <form method="post" action="" >
                        <h1 class="titulo-login">ENTRAR</h1>
                        <br>
                        <div class="cad-login">
                        <input name="email" required="required" type="text" placeholder="Digite seu Email:" />
                        <br>
                        <input name="senha" required="required" type="password" placeholder="Digite sua Senha:" />
                        <button class="enviar-contato" type="submit">Entrar</button>
                        </form>
                    </div>
        </section>
        </main>

    
</body>
</html>