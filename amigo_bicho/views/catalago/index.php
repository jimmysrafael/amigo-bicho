<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../amigo_bicho/views/catalago/css/style.css">
   <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
   <title>Abrigo Amigo Bicho</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="shortcut icon" href="../amigo_bicho/views/catalago/image/favicon_pet.png" type="image/x-icon">
</head>

<body>
   <header id="logo">
      <a href="/home/index.html"><img src="../amigo_bicho/views/catalago/image/logo uau 2.png" alt="logo do site"></a>
   </header>

   <nav>
      <ul class="navegador_lista">
         <li><a href="/doacoes/index.html">Faça Uma Doação</a></li>
         <li><a href="/catalogo/index.html">Adote Um Pet</a></li>
         <li><a href="/duvidas/index.html">Dúvidas?</a></li>
      </ul>

      <ul class="icones_navegaçao">
         <li>
            <a href="#"> <img class="icones_acesso" src="../amigo_bicho/views/catalago/image/icon_fb_preto.png" alt="icone do facebook"></a>
         </li>
         <li>
            <a href="https://www.instagram.com/abrigoamigobicho/" target="_blank"> <img class="icones_acesso" src="../amigo_bicho/views/catalago/image/icon_insta_preto.png" alt="icone do instagram"></a>
         </li>

         <li>
            <a href="#"> <img class="icones_acesso" src="../amigo_bicho/views/catalago/image/icon_whats_preto.png" alt="link do whatsapp"></a>
         </li>
      </ul>
   </nav>

<?php foreach ($animais as $animal): ?>
    <div class="box">
        <img src="../amigo_bicho/<?= htmlspecialchars($animal['path']) ?>" alt="Foto de <?= htmlspecialchars($animal['nome_pet']) ?>">
        <div class="content">
            <h1><?= htmlspecialchars($animal['nome_pet']) ?></h1>
            <h2><?= htmlspecialchars($animal['raca_pet']) ?></h2>
            <p>Doador: <?= htmlspecialchars($animal['nome_doador']) ?> | Endereço: <?= htmlspecialchars($animal['endereco']) ?></p>
        </div>
    </div>
<?php endforeach; ?>
 

   <!-- Rodapé -->
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
   </footer> <!-- Criei uma div principal, dividi ela em duas, depois eu dividi as duas com o CSS e depois adicionei a fonte e os espaçamentos -->

</body>

</html>