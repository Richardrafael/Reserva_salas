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
?>

<!DOCTYPE html>
<html>

<head>
  <title>Reservas</title>
</head>

<body>
  <form method="GET" action="home.php">
    <input type="text" name="nome_sala" placeholder="Nome da Sala">
    <button type="submit">Buscar</button>
  </form>
  <table border="1">
    <tr>
      <th>Nome da Sala</th>
      <th>Foto</th>
      <th>Local</th>
      <th>Data</th>
      <th>Hora Início</th>
      <th>Hora Fim</th>
      <th>Responsável</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['nome_sala'] . "</td>";
      echo "<td><img src='" . $row['foto_sala'] . "' width='100'></td>";
      echo "<td>" . $row['local_sala'] . "</td>";
      echo "<td>" . $row['data_uso'] . "</td>";
      echo "<td>" . $row['hora_inicio'] . "</td>";
      echo "<td>" . $row['hora_fim'] . "</td>";
      echo "<td>" . $row['responsavel'] . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>