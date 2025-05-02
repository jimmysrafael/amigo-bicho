<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/amigo-bicho/amigo_bicho/views/formulario/css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
   <title>Abrigo Amigo Bicho</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="shortcut icon" href="/amigo-bicho/amigo_bicho/views/formulario/image/favicon_pet.png" type="image/x-icon">

   <!-- SweetAlert2 -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="background">
   <header id="logo">
      <a href="/home/index.html"><img src="/amigo-bicho/amigo_bicho/views/formulario/image/logo uau 2.png" alt="logo do site"></a>
   </header>

   <nav>
      <ul class="navegador_lista">
         <li><a href="/doacoes/index.html">Faça Uma Doação</a></li>
         <li><a href="/catalogo/index.html">Adote Um Pet</a></li>
         <li><a href="/duvidas/index.html">Dúvidas?</a></li>
      </ul>

      <ul class="icones_navegaçao">
         <li>
            <a href="#"> <img class="icones_acesso" src="/amigo-bicho/amigo_bicho/views/formulario/image/icon_fb_preto.png" alt="icone do facebook"></a>
         </li>
         <li>
            <a href="https://www.instagram.com/abrigoamigobicho/" target="_blank"> <img class="icones_acesso" src="/amigo-bicho/amigo_bicho/views/formulario/image/icon_insta_preto.png" alt="icone do instagram"></a>
         </li>
         <li>
            <a href="#"> <img class="icones_acesso" src="/amigo-bicho/amigo_bicho/views/formulario/image/icon_whats_preto.png" alt="link do whatsapp"></a>
         </li>
      </ul>
   </nav>

   <div class="retanguloMaior">
      <h1 class="titulo">CADASTRE SEU AMIGO PET</h1>
      <form action="/amigo-bicho/amigo_bicho/index.php?action=processarFormulario" method="POST" enctype="multipart/form-data">
         <fieldset>
            <div>
               <label class="textForm">Nome completo</label>
               <input class="retangulo" type="text" name="nome" id="nome" required>
            </div>
            <div>
               <label class="textForm">Número para contato</label>
               <input class="retangulo" type="tel" name="telefone" id="telefone" required>
            </div>
            <div>
               <label class="textForm">Endereço (rua - número - bairro)</label>
               <input class="retangulo" type="text" name="endereco" id="endereco" required>
            </div>
            <div>
               <label class="textForm">Raça</label>
               <input class="retangulo" type="text" name="raca" id="raca" required>
            </div>
            <div>
               <label class="textForm">Foto do Pet</label>
               <input class="form-control" type="file" name="foto_pet" id="foto_pet" required>
            </div>

            <button class="enviar" type="submit">Cadastrar</button>
         </fieldset>
      </form>
   </div>

   <footer>
      <div class="rodape_principal">
         <div class="lado_esquerdo">
            <a class="rodape_esquerdo" href="/doacoes/index.html">Quero ajudar</a>
            <a class="rodape_esquerdo" href="/catalogo/index.html">Quero adotar</a>
            <a class="rodape_esquerdo" href="/localizacao-abrigo/index.html">Nosso endereço</a>
         </div>
         <div class="lado_direito">
            <a class="rodape_direito">+55 81 9 8590-9098</a>
            <a class="rodape_direito">amigo_bicho@gmail.com</a>
         </div>
      </div>
   </footer>

   <?php
   if (isset($_SESSION['mensagem'])) {
      $tipo = $_SESSION['mensagem']['tipo'];
      $texto = $_SESSION['mensagem']['texto'];

      if ($tipo == 'sucesso') {
         echo "<script>
            Swal.fire({
               icon: 'success',
               title: 'Sucesso!',
               text: '$texto',
               confirmButtonColor: '#3085d6',
               confirmButtonText: 'OK'
            });
         </script>";
      } else {
         echo "<script>
            Swal.fire({
               icon: 'error',
               title: 'Erro!',
               text: '$texto',
               confirmButtonColor: '#d33',
               confirmButtonText: 'OK'
            });
         </script>";
      }
      unset($_SESSION['mensagem']);
   }
   ?>
</body>

</html>
