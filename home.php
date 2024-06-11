<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.php');
  exit();
}
include 'conexa.php';
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
  <div class="container">
    <div style="width: 90%;" id="tabela_juridico2"></div> <br>
    <span class="loader" id="loader_relatorio" style="display: none;"></span>
  </div>

</body>

</html>



<script>
  $(document).ready(() => {
    document.getElementById('loader_relatorio').style.display = "inline-block";
    $("#tabela_juridico2").load(`funcao/tabela_home.php`);
  });
</script>