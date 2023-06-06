<?php 
    include('conexao.php');
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $fone = $_POST['fone'];
    $celular = $_POST['cel'];
    $email= $_POST['email'];


    echo "<h1>Alteração de dados </h1>";
    echo "<p>Usuário: $nome<\p>";
    $sql = "UPDATE agenda SET 
             nome='$nome',
             apelido='$apelido',
             endereco='$endereco',
             bairro='$bairro',
             cidade='$cidade',
             estado='$estado,
             email='$email',
             telefone='$fone',
             celular='$celular',
             where id_agenda=$id_agenda";
    
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
            echo "Dados alterados com sucesso!<br>";
    else
            echo "Erro ao alterar dados: $msqli_erro($con)!";


?>