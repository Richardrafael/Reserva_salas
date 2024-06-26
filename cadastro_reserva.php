<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.php');
  exit();
}
include 'conexa.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome_sala = $_POST['nome_sala'];
  $local_sala = $_POST['local_sala'];
  $data_uso = $_POST['data_uso'];
  $hora_inicio = $_POST['hora_inicio'];
  $hora_fim = $_POST['hora_fim'];
  $responsavel = $_POST['responsavel'];
  $motivo = $_POST['motivo'];
  $informacoes = $_POST['informacoes'];
  $convidados = $_POST['convidados'];
  $foto_sala = '';

  if ($_FILES['foto_sala']['name']) {
    $target_dir = "uploads/";
    $unique_id = uniqid(); // Gera um ID único
    $original_filename = basename($_FILES["foto_sala"]["name"]);
    $file_extension = pathinfo($original_filename, PATHINFO_EXTENSION);
    $target_file = $target_dir . $unique_id . '.' . $file_extension;

    if (move_uploaded_file($_FILES["foto_sala"]["tmp_name"], $target_file)) {
      $foto_sala = $target_file;
    } else {
      echo "Erro ao fazer upload da foto.";
    }
  }

  $sql = "INSERT INTO reservas (nome_sala, foto_sala, local_sala, data_uso, hora_inicio, hora_fim, responsavel, motivo, informacoes, convidados) 
            VALUES ('$nome_sala', '$foto_sala', '$local_sala', '$data_uso', '$hora_inicio', '$hora_fim', '$responsavel', '$motivo', '$informacoes', '$convidados')";

  if ($conn->query($sql) === TRUE) {
    echo "Reserva cadastrada com sucesso.";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
}

include 'components/menu.php';
include 'css/reservas.php';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Cadastro de Reserva</title>
</head>

<body>
  <div class="container_1">
    <h1>Cadastrar Reserva</h1>
    <form class="form" method="POST" action="cadastro_reserva.php" enctype="multipart/form-data">
      <input type="text" name="nome_sala" placeholder="Nome da Sala" required>
      <span>Adicione imagem da sala</span>
      <input type="file" name="foto_sala">
      <input type="text" name="local_sala" placeholder="Local da Sala" required>
      <input type="date" name="data_uso" required>
      <input type="time" name="hora_inicio" required>
      <input type="time" name="hora_fim" required>
      <input type="text" name="responsavel" placeholder="Responsável pelo uso" required>
      <textarea name="motivo" placeholder="Motivo do uso"></textarea>
      <textarea name="informacoes" placeholder="Informações adicionais"></textarea>
      <textarea name="convidados" placeholder="Convidados"></textarea>
      <button class="btn" type="submit">Cadastrar Reserva</button>
    </form>
  </div>

</body>

</html>