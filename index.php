<?php
session_start();
// include 'conexa.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $username = $_POST['username'];
//   $password = $_POST['password'];
//   $senha = md5($password);

//   $sql = "SELECT * FROM usuarios WHERE username = ?  and  senha = ?";
//   $vert = mysqli_prepare($conn, $sql);
//   mysqli_stmt_bind_param($vert, 'ss', $username, $senha);
//   if ($vert) {
//     mysqli_stmt_execute($vert);
//     mysqli_stmt_store_result($vert);
//     if (!mysqli_stmt_num_rows($vert)) {
//       echo 'usuario nao encontrado';
//     } else {
//       $_SESSION['loggedin'] = true;
//       header('Location: home.php');
//       exit();
//     }
//   }
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   $row = $result->fetch_assoc();
//   if (password_verify($password, $row['password'])) {
//     $error = "Senha incorreta.";
//   } else {
//     $_SESSION['loggedin'] = true;
//     header('Location: home.php');
//     exit();
//   }

//   echo $password;
// } else {
//   $error = "Usuário não encontrado.";
// }
// }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <form method="POST" action="index.php">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Login</button>
    <h1>aaaaaaaaaaaaaaaaaaaaaaaaaaaa</h1>
    <!-- <?php if (isset($error)) echo "<p>$error</p>"; ?> -->
  </form>
</body>

</html>