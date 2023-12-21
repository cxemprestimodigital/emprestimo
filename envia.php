<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebedados</title>
</head>
<body>
<?php
$conexao = mysqli_connect("localhost","root","","teste");
//CHEGAR CONEXAO
if(!$conexao){
echo"NÃO CONECTADO";
}
echo"CONECTADO";

//RECUPERAR E VERIFICAR JÁ EXISTE
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao, $cpf);
$sql = "SELECT cpf FROM teste.dados WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao, $sql);

if(mysqli_num_rows($retorno)>0){
header('location: termos.html');
}else{

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "INSERT INTO teste.dados(cpf,senha) values ('$cpf','$senha')";
$resultado = mysqli_query ($conexao, $sql);
header('location: termos.html');








}


?>
<body>