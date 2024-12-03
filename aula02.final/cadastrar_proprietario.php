<h1>Cadastrar Proprietário</h1>

<form action="?page=salvar_proprietario" method="post">
<input type="hidden" name="acao" value="cadastrar">

<div class="card" style="width: 30rem;">
    <div>
        <div class="container mb-3">
            <label class="mt-3">Nome</label>
            <input type="text" name="nome_proprietario" class="form-control" placeholder="Digite o seu nome">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Data de nascimento</label>
            <input type="text" name="nascimento_proprietario" class="form-control" placeholder="Digite a sua data de nascimento">
        </div>
        <div class="container mb-3">
            <label class="mt-3">CPF</label>
            <input type="text" name="cpf_proprietario" class="form-control" placeholder="Digite o seu CPF">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Email</label>
            <input type="text" name="email_proprietario" class="form-control" placeholder="Digite o seu email">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Telefone</label>
            <input type="text" name="telefone_proprietario" class="form-control" placeholder="Digite o seu telefone">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Endereço</label>
            <input type="text" name="endereco_proprietario" class="form-control" placeholder="Digite o seu endereço">
        </div>
        <div class="container mb-3">
            <label class="mt-3">UF</label>
            <input type="text" name="uf_proprietario" class="form-control" placeholder="Digite a UF">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Número residencial</label>
            <input type="text" name="num_residencia_proprietario" class="form-control" placeholder="Digite o número da sua residencia">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Bairro</label>
            <input type="text" name="bairro_proprietario" class="form-control" placeholder="Digite o seu bairro">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Cidade</label>
            <input type="text" name="cidade_proprietario" class="form-control" placeholder="Digite a sua cidade">
        </div>

        <div class="container mb-3">
            <button type="submit" class="btn btn-prymary">Cadastrar</button>
        </div>
    </div>
</div>

</form>