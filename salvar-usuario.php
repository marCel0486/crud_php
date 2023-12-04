<?php 

switch ($_REQUEST["acao"]){

    case "cadastrar":
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $data_nasc = $_POST["data_nasc"];

    $sql = "INSERT INTO usuários (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}','{$senha}','{$data_nasc}')";

    $res = $conn->query($sql);

    if($res == true){
        echo "<script>alert('cadatro realizado com sucesso'); </script>";
        echo "<script>location.href='?page=listar';</script>";
    }else{
        echo "<script>alert('cadastro não realizado'); </script>";
        echo "<script>location.href='?page=listar';</script>";
    }

    break;

    case "editar":
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $data_nasc = $_POST["data_nasc"];

    $sql = "UPDATE usuários SET
    nome = '{$nome}',
    email = '{$email}',
    senha = '{$senha}',
    data_nasc = '{$data_nasc}'
        WHERE
        id=".$_REQUEST["id"];
    


    $res = $conn->query($sql);

    if($res == true){
        echo "<script>alert('editado com sucesso'); </script>";
        echo "<script>location.href='?page=listar';</script>";
    }else{
        echo "<script>alert('edição não realizada'); </script>";
        echo "<script>location.href='?page=listar';</script>";

    }

    break;

    case "excluir":
        $sql = "DELETE FROM usuários WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res == true){
            echo "<script>alert('excluido com sucesso'); </script>";
            echo "<script>location.href='?page=listar';</script>";
        }else{
            echo "<script>alert('exclusão não realizada'); </script>";
            echo "<script>location.href='?page=listar';</script>";
    
        }


    break;


}

?>