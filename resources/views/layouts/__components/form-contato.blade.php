{{$slot}}
    <form action={{route('Contato')}} method="post">
    @csrf
        <h1 class="titulo">Atendimento!</h1>
        <br>
        <div class="cad">
        <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="" />
        <br>
        <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="" />
        <br>
        <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="" />
        <br>
        <select name= "motivo_contatos" class="contatos">
        </div>
             <option value="Qual o motivo do contato?"></option>
             <option value="1">Compra/Teste</option>
             <option value="2">Sugestão</option>
             <option value="3">Reclamação</option>
             <option value="4">Informação</option>
             <option value="5">Suporte Tecnico</option>
             </select>
            <br>
            <textarea class="mensagem" name="mensagem">Deixe aqui sua mensagem.</textarea>
            <br>
            <button class="enviar-contato" type="submit">ENVIAR</button>
            </form>