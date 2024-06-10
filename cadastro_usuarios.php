<?php
include 'css/cadastro_style.php';
?>


<body>
  <section class="bg">
    <h1>Cadastro Usuário</h1>
    <div class="container-login">
      <form method="POST" action="insert_user.php">
        <div class="container-input">
          <div class="input-box">
            <p class="titulo-input">Usuario</p>
            <input type="text" name="username" placeholder="Usuário" required>
          </div>
          <div class="input-box">
            <p class="titulo-input">Senha</p>
            <input type="password" name="password" placeholder="Senha" required>
          </div>
          <button type="submit" class="botao-login">Cadastrar</button>
          <!-- <a href="cadastro_usuarios.php">Não possuo uma conta</a> -->
          <?php if (isset($error)) echo "<p>$error</p>"; ?>
      </form>
    </div>
  </section>
</body>