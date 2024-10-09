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
 <div class="form-container">
    <form action="" method="post">
       <h3>Novo Registro</h3>
       <input type="text" name="name" placeholder="Insira seu Nome" required class="box">
       <input type="email" name="email" placeholder="Insira seu Email" required class="box">
       <input type="password" name="password" placeholder="Insira sua Password" required class="box">
       <input type="password" name="cpassword" placeholder="Confirme a Password" required class="box">
       <select name="user_type" class="box">
          <option value="user">Utilizador</option>
          <option value="admin">Administrador</option>
       </select>
       <input type="submit" name="submit" value="Enviar" class="btn">
       <p>Ja tem conta? <a href="login.php">Login</a></p>
     </form>
  </div>
</body>
</html>