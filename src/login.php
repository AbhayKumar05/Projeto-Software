<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    // Usamos pg_escape_string para escapar os dados antes de usá-los na query
    $email = pg_escape_string( $_POST['email']);
    $pass = pg_escape_string(md5($_POST['password']));

    // Query adaptada para PostgreSQL
    $select_users = pg_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'");

    if (!$select_users) {
        die('Query failed: ' . pg_last_error());
    }

    // Usamos pg_num_rows para contar os resultados
    if (pg_num_rows($select_users) > 0) {
        // Obter o resultado usando pg_fetch_assoc
        $row = pg_fetch_assoc($select_users);

        // Verificar o tipo de usuário e definir as sessões
        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_id'] = $row['id'];
            header('Location: admin_page.php');
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('Location: index.php');
        }
    } else {
        $message[] = 'Incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <?php
    if(isset($message)){
       foreach($message as $message){
          echo '
             <div class="message">
                <span>'.$message.'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
             </div>
           ';
         }
      }
   ?>
<div class="login-container">
  <!-- Form container for the login form -->
  <div class="form-wrapper">
    <form action="" method="post">
      <h3 class="cormorant-garamond-bold">Inicie Sessão</h3>
      <h3 class="cormorant-garamond-light">Aceda à sua conta e continue a explorar o nosso universo literário.</h3>
      <input type="email" name="email" placeholder="Insira seu Email" required class="box">
      <input type="password" name="password" placeholder="Insira sua Password" required class="box">
      <input type="submit" name="submit" value="Enviar" class="btn">
      <p>Não tem conta? <a href="register.php">Se registre</a></p>
    </form>
  </div>
</div>


</body>
</html>