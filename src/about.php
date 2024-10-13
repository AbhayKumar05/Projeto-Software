<?php
include 'config.php';
session_start(); /*
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre nós</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sobre nós</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">
   <div class="flex">
      <div class="image">
         <img src="images/Convite Clube do livro2.png" alt="">
      </div>

      <div class="content">
         <h3>Porque nós?</h3>
         <p>Nossa livraria é um oásis para todos os amantes da leitura, um lugar onde cada livro é uma porta para novos horizontes. 
            Buscamos sempre proporcinar a melhor experiencia para nossos leitores.
            Explore nossas estantes virtuais, descubra clássicos intemporais, lançamentos emocionantes e joias literárias escondidas. </p>
            <p>Seja você um ávido leitor ou um curioso explorador de mundos literários, estamos ansiosos para guiá-lo nesta jornada única 
            através das letras e das emoções que somente os livros podem proporcionar. 
            Bem-vindo ao nosso cantinho de descobertas literárias, onde cada página vira uma nova aventura!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>
</section>


<!--<section class="reviews">
   <h1 class="title">Avaliações</h1>
   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Excelente seleção de livros! Esta livraria tem uma variedade incrível de gêneros e autores. 
            Encontrei facilmente o que estava procurando e também descobri novos títulos interessantes.  
            Recomendo fortemente esta livraria para todos os amantes de livros.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Noah</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Uma livraria decente com uma boa variedade de livros, especialmente nas seções mais populares. 
            No entanto, eu estava esperando encontrar mais títulos obscuros e clássicos menos conhecidos.  
            No geral, é um lugar agradável para passar algum tempo explorando.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Luara Oliveira</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Esta livraria oferece uma ampla variedade de livros, desde best-sellers até títulos mais obscuros. 
            Gosto muito disso. No entanto, às vezes ela pode ficar um pouco lotada. 
            Ainda assim, é um ótimo lugar para encontrar leituras interessantes.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rick Carter</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Esta livraria é um verdadeiro paraíso para os amantes de livros. 
            A variedade de títulos é surpreendente, abrangendo desde clássicos até os mais recentes best-sellers.  
            Além disso, a equipe é extremamente atenciosa e sempre pronta para ajudar a encontrar o livro certo.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Elena Santos</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p> A plataforma era intuitiva e fácil de usar, com uma ampla seleção de livros em diferentes gêneros.
             O processo de compra foi simples e eficiente, e a entrega dos livros foi rápida e segura. 
             Além disso, a livraria oferecia recursos adicionais, como resenhas de usuários e recomendações personalizadas,
             que enriqueceram minha experiência de compra online.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carlos José</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Encontrei uma vasta coleção de títulos, desde best-sellers até obras menos conhecidas, atendendo a diversos gostos e interesses. 
            O site era fácil de navegar, com ferramentas de busca eficientes e descrições detalhadas dos livros. 
            Além disso, a livraria virtual oferecia promoções e descontos atrativos, tornando a compra ainda mais vantajosa. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fernanda Camargo</h3>
      </div>
   </div>
</section>-->




<!--------  FAQs   ------->
<section class="faq">
   <div class="faq-container">
      
      <div class="faq-left">
         <h1>Tem dúvidas?</h1>
         <h2>Nós temos a resposta!</h2>
         <p class="small-text">Se tiver mais perguntas, não hesite em contactar-nos ou entre em contacto diretamente com os desenvolvedores.</p>
      </div>

      
      <div class="faq-right">
         <div class="faq-item">
            <div class="faq-question">
               <span>Como posso pesquisar por um livro específico?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>Pode utilizar a barra de pesquisa no topo da página ou aplicar filtros, como o género, preço ou autor, para encontrar o livro que procura.</p>
            </div>
         </div>
         
         <div class="faq-item">
            <div class="faq-question">
               <span>É seguro fazer pagamentos no site?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>Sim, utilizamos criptografia TLS/SSL para garantir que todas as transações são seguras. Além disso, todos os dados sensíveis são armazenados de forma segura.</p>
            </div>
         </div>

         <div class="faq-item">
            <div class="faq-question">
               <span>Como posso alterar ou cancelar uma encomenda?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>Pode alterar ou cancelar uma encomenda acedendo à sua conta, na secção "Minhas Encomendas". Se precisar de assistência, contacte o nosso suporte.</p>
            </div>
         </div>

         <div class="faq-item">
            <div class="faq-question">
               <span>Que métodos de pagamento estão disponíveis?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>Aceitamos vários métodos de pagamento, incluindo cartões de crédito, débito, e opções como PayPal e MB Way.</p>
            </div>
         </div>

         <div class="faq-item">
            <div class="faq-question">
               <span>Como recebo recomendações personalizadas de livros?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>O nosso sistema de recomendações utiliza as suas preferências e histórico de compras para sugerir livros que possam ser do seu interesse.</p>
            </div>
         </div>

         <div class="faq-item">
            <div class="faq-question">
               <span>Os meus dados pessoais estão protegidos?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>Sim, seguimos as melhores práticas de segurança, incluindo a utilização de criptografia e autenticação multifator (MFA) para proteger os seus dados.</p>
            </div>
         </div>

         <div class="faq-item">
            <div class="faq-question">
               <span>Como funciona o sistema de inventário da livraria?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>O nosso sistema de inventário é gerido por administradores e é atualizado regularmente. Produtos esgotados serão indicados como indisponíveis na página do livro.</p>
            </div>
         </div>

         <div class="faq-item">
            <div class="faq-question">
               <span>Como posso contactar o suporte ao cliente?</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
               <p>Pode contactar o nosso suporte ao cliente através da página de contacto, onde encontrará um formulário ou o nosso endereço de e-mail.</p>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="authors">

   <h1 class="title">Developers</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/colleenhouck.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
       </div>
         <h3>Abhay Kumar</h3>
      </div>

      <div class="box">
         <img src="images/George_R._R._Martin.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Isis Venturin de Oliveira</h3>
      </div>

      <div class="box">
         <img src="images/jonhgreen.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Nayuka Jasmin Malebo</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>
<script src="js/faq.js"></script>


</body>
</html>