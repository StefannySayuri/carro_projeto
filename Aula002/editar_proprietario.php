<h1>Editar Proprietário</h1>
<?php

$sql_1 = "SELECT * FROM proprietario WHERE id_proprietario=".$_REQUEST['id_proprietario'];
$res_1 = $conn->query($sql_1);
$row_1 = $res_1->fetch_object();

?>

<form action="?page=salvar_modelos" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_proprietario" value="<?php echo $row_1->id_proprietario; ?>">

    <div class="container mb-3">
            <label class="mt-3">Nome</label>
            <input type="text" name="nome_proprietario" class="form-control" placeholder="Digite o seu nome" value="<?php echo $row_1->nome_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Data de nascimento</label>
            <input type="text" name="nascimento_proprietario" class="form-control" placeholder="Digite a sua data de nascimento" value="<?php echo $row_1->nascimento_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">CPF</label>
            <input type="text" name="cpf_proprietario" class="form-control" placeholder="Digite o seu CPF" value="<?php echo $row_1->cpf_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Email</label>
            <input type="text" name="email_proprietario" class="form-control" placeholder="Digite o seu email" value="<?php echo $row_1->email_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Telefone</label>
            <input type="text" name="telefone_proprietario" class="form-control" placeholder="Digite o seu telefone" value="<?php echo $row_1->telefone_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Endereço</label>
            <input type="text" name="endereco_proprietario" class="form-control" placeholder="Digite o seu endereço" value="<?php echo $row_1->endereco_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">UF</label>
            <input type="text" name="uf_proprietario" class="form-control" placeholder="Digite a UF" value="<?php echo $row_1->uf_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Número residencial</label>
            <input type="text" name="num_residencia_proprietario" class="form-control" placeholder="Digite o número da sua residencia" value="<?php echo $row_1->num_residencia_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Bairro</label>
            <input type="text" name="bairro_proprietario" class="form-control" placeholder="Digite o seu bairro" value="<?php echo $row_1->bairro_proprietario;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Cidade</label>
            <input type="text" name="cidade_proprietario" class="form-control" placeholder="Digite a sua cidade" value="<?php echo $row_1->cidade_proprietario;?>">
        </div>
        <div class="container mb-3">
            <button type="submit" class="btn btn-primary">Alterar</button>
</div>
</form>