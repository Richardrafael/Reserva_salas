<?php
$servername = "localhost";
$username = "root";
$password = "1979";
$dbname = "reserva_salas";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  echo ("Connection failed: " . $conn->connect_error);
}
