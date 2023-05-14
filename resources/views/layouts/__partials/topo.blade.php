<header class="cabecalho">
        <img class="cabecalho-imagem" src="img/teste.png" alt="Logo site">
        <h1 class="conteudo-principal-escrito-titulo1">GESTTOQUE</h1>
        <nav class="cabecalho-menu">
            <a class="cabecalho-menu-item" href="{{ route('Sobre-Nos') }}">
                <ion-icon name="newspaper-outline"></ion-icon>Sobre-nós</a>
            <a class="cabecalho-menu-item" href="{{ route('Contato') }}">
                <ion-icon name="call-outline"></ion-icon>Contato</a>
            <button class="button-acessar" type="submit"><a href="{{ route('Entrar') }}">Entrar</button></a>
        </nav>
    </header>