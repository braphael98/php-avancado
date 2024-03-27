<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$hora = $_POST["hora_desejada"]; // Corrigido
$site = $_POST["site"];
$senha = $_POST["senha"];
$cor = $_POST["cor_favorita"]; // Corrigido
$numFilhos = $_POST["num_filhos"]; // Corrigido
$peso = $_POST["peso"];
$sexo = $_POST["sexo"];
$estado = $_POST["estado"];
echo "Obrigado ".$nome." por informar seu email, ".$email." e seu celular ".$celular."";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form action="cadastro.php" method ="post">
    <h1>Cadastro de passagem para os Estados Unidos</h1>
    <label for ="nome"> Nome:</label> <?php echo $nome; ?>
    <label for = "email">E-mail: </label> <?php echo $email; ?>
    
    <br>
    <label for = "celular">Celular Com DDD: </label><?php echo $celular; ?>
   
    <label for  = "hora desejada"> Hora desejada: </label><?php echo $hora; ?>
   
    <br>
   
   
    <label for="senha">Senha: </label><?php echo "***********"; ?>
    
    <label for = "cor favorita"> Sua cor favorita</label><?php echo $cor; ?>
    
    <br>
    <label for="num_filhos">Numero de Filhos: </label><?php echo $numFilhos; ?>
   
    <label for="peso">Peso</label><?php echo $peso; ?>
    
    <br>
    <label for="sexo">Sexo: </label><?php echo $sexo; ?>
    <br>
    
    <br>
    
    <br>

    <label for="estado">Estado: </label><?php echo $estado; ?>
    
    <label for="menssagem">menssagem</label><?php echo "bom dia"; ?>
    
    <br>
    
</form>
    
</body>
</html>
