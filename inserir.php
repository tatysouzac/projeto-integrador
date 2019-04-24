<?php

include "conexao.php";

$nome=$_POST["nome"];
$email=$_POST["email"];


$sql=("insert into cliente_ofertas (nome, email) values ('$nome','$email')");

$insert=mysqli_query($conexao,$sql);

if ($insert) {
    echo "<script>alert('Cadastrado com sucesso.')</script>";
} else {
    echo "<script>alert('Falha no cadastro.')</script>";
}
echo"<script> window.location.href = 'Inicio.php' </script>";

mysqli_close($conexao);

?>
