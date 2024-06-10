<?php
include 'conexa.php';
include 'css/modal_style.php';

$username = $_POST['username'];
$senha = $_POST['password'];
$password = md5($senha);

$iserror = false;

$sql = "INSERT INTO usuarios (username, senha) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
} else {
  $iserror = true;
  $error = 'Error ao cadastrar';
}
$conn->close();
?>

<body>
  <div class="header">
    <a href="index.php" class="botao-seta">
      <i class="fa-regular fa-circle-left"></i>
    </a>
    <!-- <img class="logo" src="image/santacasa.png" alt="Santa Casa São José dos Campos" class="logowifi"> -->
  </div>
  <?php if ($iserror) : ?>
    <div class="container-results">
      <span class="error">
        <?= $error; ?>
      </span>
      <span class="volte">
        Volte e tente novamente
      </span>
      <a class="btn" href="<?php echo $pagina ?>?id=<?php echo $_SESSION['id']; ?>&ap=<?php echo $_SESSION['ap']; ?>">
        Voltar
      </a>
    </div>
  <?php else : ?>
    <div class="container-results">
      <span class="sucesso">Usuario Cadastrado com sucesso</span>
      <span class="volte">
        Já pode iniciar suas reservas
      </span>
      <a class="btn" href="index.php">
        Voltar
      </a>
    </div>
  <?php endif; ?>
</body>