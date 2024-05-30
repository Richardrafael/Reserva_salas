<?php
include 'conexa.php';

$username = $_POST['username'];
$senha = $_POST['password'];
$password = md5($senha);

$sql = "INSERT INTO usuarios (username, senha) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
  echo 'cadastrado com sucesso';
} else {
  echo 'Error ao cadastrar';
}

$conn->close();
