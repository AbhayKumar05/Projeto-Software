<?php
 include 'config.php';
 session_start();/*
 $user_id = $_SESSION['user_id'];
 if(!isset($user_id)){
    header('location:login.php');
   }*/
 if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
       $message[] = 'message sent successfully!';
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contacto</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <?php include 'header.php'; ?>
 <div class="heading">
    <h3>Entre em Contacto</h3>
    <p> <a href="home.php">Home</a> / Contacto </p>
  </div>

  <section class="contact">
   <div class="contact-container">
      <!-- Left side: Contact form -->
      <div class="form-container">
         <form action="" method="post">
            <h3>Contacte-nos</h3>
            <input type="text" name="name" required placeholder="Insira seu Nome" class="box">
            <input type="email" name="email" required placeholder="Insira seu Email" class="box">
            <input type="number" name="number" required placeholder="Insira seu Número" class="box">
            <textarea name="message" class="box" placeholder="Mensagem" cols="30" rows="10"></textarea>
            <input type="submit" value="Envie" name="send" class="btn">
         </form>
      </div>

      
      <div class="text-container">
         <h3>Como podemos ajudar?</h3>
         <p>Estamos sempre disponíveis para responder às suas dúvidas e prestar assistência no que for necessário. Sinta-se à vontade para nos contactar!</p>
         <h3>Visite-nos</h3>
         <p>Email: contacto@ventorimlivros.pt</p>
         <p>Telefone: +351 210 123 456</p>
         <h3>Perguntas Frequentes</h3>
         <p>Veja a nossa secção de <a href="about.php">FAQ</a> para respostas rápidas a dúvidas comuns.</p>
      </div>
   </div>
</section>

 <?php include 'footer.php'; ?>
 <script src="js/script.js"></script>
</body>
</html>