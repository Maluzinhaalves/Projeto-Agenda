<?php 
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "delete from agenda where id_agenda=$id_agenda";
    $result = mysqli_query($con,$sql);

    if($result)
    echo "Dados deletados com sucesso!<br>";
else
    echo "Erro ao deletar dados: $msqli_erro($con)!";



?>
<a href="index.php">Voltar</a>