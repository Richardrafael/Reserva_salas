<?php
include 'css/menu.php'
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container_menu">
  <a href="home.php">
    Home
  </a>
  <a href="cadastro_reserva.php">
    Cadastrar Reserva
  </a>

  <form method="post" action="logout.php" style="display: inline;">
    <button type="submit" class="btn btn-danger">Logout</button>
  </form>
</div>