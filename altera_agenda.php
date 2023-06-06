<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro Agenda</h1>
    <form action="cadastro_agenda.php" method="POST"
    enctype="multipart/form-data" >
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" id="apelido">
        </div>
        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade">
        </div>
        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado">
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input type="tel" name="fone" id="fone" 
            placeholder="Formato (18) 9999-8888"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4-5}-[0-9]{4}">
        </div>
        <div>
            <label for="cel">Celular</label>
            <input type="tel" name="cel" id="cel" 
            placeholder="Formato (18) 9999-8888"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4-5}-[0-9]{4}">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>

       
        <div>
            <input type="submit" value="Salvar">
        </div>
    </form>
    
</body>
</html>

<?php 
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "select *from agenda where id_agenda=$id_agenda";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);


?>