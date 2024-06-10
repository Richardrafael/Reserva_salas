<?php session_start();
include 'conexa.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $senha = md5($password);
  $sql = "SELECT * FROM usuarios WHERE username = ?  and  senha = ?";
  $vert = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($vert, 'ss', $username, $senha);
  if ($vert) {
    mysqli_stmt_execute($vert);
    mysqli_stmt_store_result($vert);
    if (!mysqli_stmt_num_rows($vert)) {
      $error = 'Usuário não encontrado';
    } else {
      $_SESSION['loggedin'] = true;
      header('Location: home.php');
      exit();
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <?php
  include 'css/style.php';
  ?>
</head>

<body>
  <section class="bg">
    <div class="container-login">
      <form method="POST" action="index.php">
        <div class="container-img">
          <img src="assets/profileicone.svg" width="130px" alt="Logo do sistema HiSig">
        </div>
        <div class="container-input">
          <div class="input-box">
            <p class="titulo-input">Usuario</p>
            <input type="text" name="username" placeholder="Usuário" required>
          </div>
          <div class="input-box">
            <p class="titulo-input">Senha</p>
            <input type="password" name="password" placeholder="Senha" required>
          </div>
          <button type="submit" class="botao-login">Login</button>
          <a href="cadastro_usuarios.php">Não possuo uma conta</a>
          <?php if (isset($error)) echo "<p>$error</p>"; ?>
      </form>
    </div>
  </section>
</body>

</html>