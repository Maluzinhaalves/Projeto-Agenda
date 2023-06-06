<?php
        include("conexao.php");

        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $fone = $_POST['fone'];
        $celular = $_POST['cel'];
        $email= $_POST['email'];
        $dt_cadastro = date('Y-m-d');

        
 
   
        echo "<h1>Dados do usuário</h1>";
        echo "Nome: $nome <br>";
        echo "Apelido: $apelido <br>";
        echo "Endereço: $endereco <br>";
        echo "Bairro: $bairro <br>";
        echo "Cidade: $cidade <br>";
        echo "Estado: $estado <br>";
        echo "Telefone: $fone <br>";
        echo "Celular: $celular <br>";
        echo "Email: $email <br>";
        echo "Data de cadastro: $dt_cadastro <br>";
     

        $compara= "SELECT * FROM agenda WHERE email = '$email'";
        $result = mysqli_query($con,$compara);
        $row = mysqli_num_rows($result);
      
        if($row>0){
                        echo "<h1>Usuário já cadastrado!</h1>";
                        echo "<a href='cadastro_agenda.html'>Voltar</a>";
                        exit();               
        }else{

        $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade,
                                     estado, telefone, celular, email,
                                    dt_cadastro)";


        $sql .= "VALUES ('".$nome."','".$apelido."','".
                            $endereco."','".$bairro."','".$cidade."',
                            '".$estado."','".$fone."','".$celular."',
                            '".$email."','".$dt_cadastro."')";
        
                            
        echo $sql. "<br>";
        $result = mysqli_query($con, $sql);
        if($result)
        echo "Dados cadastrados com sucesso!";
        else
        echo"Erro ao tentar cadastrar!";
        }
        

?>
 <a href="index.php">Voltar</a>