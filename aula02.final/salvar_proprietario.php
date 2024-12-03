<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO proprietario (
        proprietario_id_proprietrio,
        nome_proprietario,
        nascimento_proprietario,
        cpf_proprietario,
        email_proprietario,
        telefone_proprietario,
        endereco_proprietario,
        uf_proprietario,
        num_residencia_proprietario,
        bairro_proprietario,
        cidade_proprietario)  
        VALUES (
        ".$_POST['proprietario_id_proprietrio'].",
        '".$_POST['nome_proprietario']."',
        '".$_POST['nascimento_proprietario']."',
        '".$_POST['cpf_proprietario']."',
        '".$_POST['email_proprietario']."',
        '".$_POST['telefone_proprietario']."',
        '".$_POST['endereco_proprietario']."',
        '".$_POST['uf_proprietario']."',
        '".$_POST['num_residencia_proprietario']."',
        '".$_POST['bairro_proprietario']."',
        '".$_POST['cidade_proprietario']."',
        )";
        $res = $conn->query($sql);

            if ($res==true){

             echo "<script>alert ('cadastrado com sucesso');</script>";
             echo "<script>location.href='?page=listar_proprietarios';</script>";
            }else{
                echo "<script>alert ('cadastro não realizado');</script>";
                echo "<script>location.href='?page=listar_proprietarios';</script>";
            }

        break;

        case 'editar':
            $sql = "UPDATE proprietario SET 
            proprietario_id_proprietrio='".$_POST['proprietario_id_proprietrio']."',
            nome_proprietario='".$_POST['nome_proprietario']."',
            nascimento_proprietario='".$_POST['nascimento_proprietario']."',
            cpf_proprietario='".$_POST['cpf_proprietario']."',
            email_proprietario='".$_POST['email_proprietario']."',
            telefone_proprietario='".$_POST['telefone_proprietario']."',
            endereco_proprietario='".$_POST['endereco_proprietario']."',
            uf_proprietario='".$_POST['uf_proprietario']."',
            num_residencia_proprietario='".$_POST['num_residencia_proprietario']."',
            bairro_proprietario='".$_POST['bairro_proprietario']."',
            cidade_proprietario='".$_POST['cidade_proprietario']."'
            WHERE
            id_proprietario=".$_POST['id_proprietario'];
            $res = $conn->query($sql);
    
                if ($res==true){
    
                 echo "<script>alert ('Alterado com sucesso');</script>";
                 echo "<script>location.href='?page=listar_proprietarios';</script>";
                }else{
                    echo "<script>alert ('alteração não realizada');</script>";
                    echo "<script>location.href='?page=listar_proprietarios';</script>";
                }
    
            break;
    
        case 'excluir':
                $sql = "DELETE FROM proprietarios
                WHERE
                id_proprietarios=".$_REQUEST['id_proprietarios'];
                $res = $conn->query($sql);
        
                    if ($res==true){
        
                     echo "<script>alert ('Deseja excluir?');</script>";
                     echo "<script>location.href='?page=listar_prprietarios';</script>";
                    }else{
                        echo "<script>alert ('item não excluído');</script>";
                        echo "<script>location.href='?page=listar_proprietarios';</script>";
                    }
        
                break;
    
    default:
        # code...
        break;
}


?>