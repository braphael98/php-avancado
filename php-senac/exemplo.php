
<?php
include "pessoa.class.php";
$pessoa = new Pessoa();

$nome = $_POST["nome"];
$pessoa->setNome($nome);

$pessoa->setEmail($_POST["email"]);
$pessoa->setHora($_POST["hora_desejada"]);
$pessoa->setCelular($_POST["celular"]);
$pessoa->setSite($_POST["site"]);
$pessoa->setSenha($_POST["senha"]);
$pessoa->setCor($_POST["cor_favorita"]);
$pessoa->setNumFilhos($_POST["num_filhos"]);
$pessoa->setEstado($_POST["estado"]);
$pessoa->setMsg($_POST["msg"]);
$pessoa->setSexo($_POST["sexo"]);
$pessoa ->mostrarDados();

?>