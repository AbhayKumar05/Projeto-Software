<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    // Usamos pg_escape_string para escapar os dados antes de usá-los na query
    $name = pg_escape_string($conn, $_POST['name']);
    $email = pg_escape_string($conn, $_POST['email']);
    $pass = pg_escape_string($conn, $_POST['password']);
    $cpass = pg_escape_string($conn, $_POST['cpassword']);
    $user_type = pg_escape_string($conn, $_POST['user_type']);

    // Verifica se o usuário já existe
    $select_users = pg_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'");

    if (!$select_users) {
        die('Query failed: ' . pg_last_error());
    }

    if (pg_num_rows($select_users) > 0) {
        $message[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password does not match!';
        } else {
            // Insere o novo usuário no banco de dados
            $insert_query = "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$cpass', '$user_type')";
            $insert_result = pg_query($conn, $insert_query);

            if (!$insert_result) {
                die('Query failed: ' . pg_last_error());
            } else {
                $message[] = 'Registered successfully!';
                header('Location: login.php');
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">


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
<div class="register-page">
  <!-- Form container for registration form -->
  <div class="form-container">
    <form action="" method="post">
      <h3 class="cormorant-garamond-bold">Crie a Sua Conta</h3>
      <h3 class="cormorant-garamond-light">Junte-se à nossa comunidade de leitores e descubra um mundo de livros.</h3>
      <input type="text" name="name" placeholder="Insira seu Nome" required class="box">
      <input type="email" name="email" placeholder="Insira seu Email" required class="box">
      <input type="password" name="password" placeholder="Insira sua Password" required class="box">
      <input type="password" name="cpassword" placeholder="Confirme a Password" required class="box">
      <input type="submit" name="submit" value="Enviar" class="btn">
      <p>Já tem conta? <a href="login.php">Login</a></p>
    </form>
  </div>

  <!-- Image container with text overlay -->
  <div id="register_img" class="image-container">
    <img src="images/register.jpg" alt="Registration Image" id="reg_image">
    <div class="image-text-box">
      <h3>Descubra Novos Mundos</h3>
      <p>Com a Ventorim's Book Store, sua próxima grande leitura está a apenas um clique.</p>
    </div>
  </div>
</div>


</body>
</html> 