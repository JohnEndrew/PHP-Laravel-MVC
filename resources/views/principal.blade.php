@extends('layouts.basico')
@section('titulo','Pagina Inicial')

<body>
    @include('layouts.__partials.topo')

    <main class="conteudo">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Gestão em Estoque!</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">Excelencia em Tecnologia!</h2>
                <button class="conteudo-principal-escrito-botao"><a href="#">Faça seu Teste!</button></a>
            </div>
        
            <img class="conteudo-principal-imagem" src="img/pngwing.com (2).png" alt="Imagem principal">
        </section>
        <section class="conteudo-secundario">
            <h3 class="conteudo-secundario-titulo">O que facilita para você?</h3>
            <p class="conteudo-secundario-paragrafo">1. Sistema <strong>de comunicação interna</strong>, estilo rede social.</p>
            <p class="conteudo-secundario-paragrafo">2. Possui um sistema de <strong>armazenamento de dados.</strong></p>
            <p class="conteudo-secundario-paragrafo">3. Controle de estoque, sistema de <strong>controle de usuarios e permissões.</strong></p>
        </section>
    </main>
    @include ('layouts.__partials.footer')
    
</body>
</html>