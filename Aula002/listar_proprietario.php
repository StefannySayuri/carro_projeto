<h1>Listar Proprietario</h1>

<?php

$sql = 'SELECT * FROM proprietario
INNER JOIN proprietario WHERE proprietario_id_proprietario=id_proprietario';
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd>0) {
    
    echo "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    echo "<table class='table table-striped table-hover'>";
    echo "<tr>";
       echo "<th>#</th>";
       echo "<th>Nome</th>";
       echo "<th>Data de nascimento</th>";
       echo "<th>CPF</th>";
       echo "<th>Email</th>";
       echo "<th>Telefone</th>";
       echo "<th>Endereço</th>";
       echo "<th>UF</th>";
       echo "<th>Número residencial</th>";
       echo "<th>Bairro</th>";
       echo "<th>Cidade</th>";
       echo"</tr>";
    

    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>$row->nome_proprietario</td>";
        echo "<td>$row->nascimento_proprietario</td>";
        echo "<td>$row->cpf_proprietario</td>";
        echo "<td>$row->email_proprietario</td>";
        echo "<td>$row->telefone_proprietario</td>";
        echo "<td>$row->endereco_proprietario</td>";
        echo "<td>$row->uf_proprietario</td>";
        echo "<td>$row->num_residencia_proprietario</td>";
        echo "<td>$row->bairro_proprietario</td>";
        echo "<td>$row->cidade_proprietario</td>";
        echo "<td>
           <button onclick=\"location.href='?page=editar_modelos&id_modelo=".$row->proprietario."';\" class='btn btn-primary'>Editar</button>     
           <button onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='?page=salvar_modelos&acao=excluir&id_modelo=".$row->id_proprietario."';}else {false;}\" class='btn btn-danger'>Excluir</button> 
           </td>";
       
        echo"</tr>";

         
    }

    
}else{
    echo "não encontrou resultado";
}

?>