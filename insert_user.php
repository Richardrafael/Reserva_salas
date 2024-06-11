<?php
include 'conexa.php';
include 'css/modal_style.php';

$username = $_POST['username'];
$senha = $_POST['password'];
$password = md5($senha);

$iserror = false;
$error = "";

// Verificar se o usuário já existe
$checkSql = "SELECT COUNT(*) FROM usuarios WHERE username = ?";
$stmt = mysqli_prepare($conn, $checkSql);
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $count);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

if ($count > 0) {
  $iserror = true;
  $error = "Usuário já existe. Escolha outro nome de usuário.";
} else {
  // Inserir novo usuário
  $sql = "INSERT INTO usuarios (username, senha) VALUES (?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
    if (mysqli_stmt_execute($stmt)) {
      // Sucesso
    } else {
      $iserror = true;
      $error = "Erro ao cadastrar: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
  } else {
    $iserror = true;
    $error = "Erro na preparação da consulta: " . mysqli_error($conn);
  }
}

$conn->close();
?>

<body>
  <?php if ($iserror) : ?>
    <div class="container-results">
      <span class="error">
        <?php echo $error; ?>
      </span>
      <span class="volte">
        Volte e tente novamente
      </span>
      <a class="btn" href="cadastro_usuarios.php">
        Voltar
      </a>
    </div>
  <?php else : ?>
    <div class="container-results">
      <span class="sucesso">Usuário cadastrado com sucesso</span>
      <span class="volte">
        Já pode iniciar suas reservas
      </span>
      <a class="btn" href="index.php">
        Login
      </a>
    </div>
  <?php endif; ?>
</body>