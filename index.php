<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Página Inicial - Pojeto Mulilo</h3>
    <?php
        if(!empty($_SESSION['login'])){
            echo "<h3>Olá ". $_SESSION['login']['nome_usuario'] ." </h3>";
            echo "<a href='logout.php'>Sair</a>"
;        }
    ?>
    <hr>
    <ul>
        
       
        <li><a href="cadastro_agenda.html">Cadastrar</a></li>
        <li><a href="listar_agenda.php">Listar</a></li>
    </ul>
</body>
</html>

<?php

    include('cria_sessao.php');

?>
