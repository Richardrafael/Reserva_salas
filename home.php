<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.php');
  exit();
}
include 'conexa.php';

$query = "SELECT * FROM reservas ORDER BY data_uso ASC";
if (isset($_GET['nome_sala'])) {
  $nome_sala = $_GET['nome_sala'];
  $query = "SELECT * FROM reservas WHERE nome_sala LIKE '%$nome_sala%' ORDER BY data_uso ASC";
}
$result = $conn->query($query);
include 'css/reservas.php';
include 'components/menu.php'
?>

<!DOCTYPE html>
<html>

<head>
  <title>Reservas</title>
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
</head>

<body>
  <div id="tabela_juridico2"></div> <br>
  <span class="loader" id="loader_relatorio" style="display: none;"></span>
</body>

</html>



<script>
  $(document).ready(() => {
    document.getElementById('loader_relatorio').style.display = "inline-block";
    $("#tabela_juridico2").load(`funcao/tabela_home.php`);
  });
</script>