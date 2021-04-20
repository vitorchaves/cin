<?php
require 'includes/banners.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>#CODA - VítorChaves_Teste</title>
    <!-- EXTERNAL -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-grid.min.css" integrity="sha512-cKoGpmS4czjv58PNt1YTHxg0wUDlctZyp9KUxQpdbAft+XqnyKvDvcGX0QYCgCohQenOuyGSl8l1f7/+axAqyg==" crossorigin="anonymous" />

    <!-- MY -->
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <header>
      <div class="container-fluid bg-mainColor">
        <div class="container">
          <div class="row">
            <h1 class="text-white">Developer</h1>
            <div class="social-group">
              <a href="#" title="facebook"><i class="fab fa-facebook"></i></a>
              <a href="#" title="instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid bg-secColor">
        <div class="container">
          <menu class="row">
            <i class="fas fa-plus floating-icon"></i>
            <ul>
              <li><a href="#" title="Menu" class="--no-link-style">Menu001</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">MenuMenu002</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">M003</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">MenuM004</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">Menu5</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">Me6</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">SuperMenu5</a></li>
            </ul>

            <ul class="responsive">
              <li><a href="#" title="Menu" class="--no-link-style">Menu001</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">MenuMenu002</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">M003</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">MenuM004</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">Menu5</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">Me6</a></li>
              <li><a href="#" title="Menu" class="--no-link-style">SuperMenu5</a></li>
            </ul>
          </menu>
        </div>
      </div>
    </header>

    <section class="full-banner">

    <i class="fas fa-chevron-left navigation nav-left"></i>
    <i class="fas fa-chevron-right navigation nav-right"></i>


    <div class="carousel-banners">
<?php
foreach ($banners as $banner) {
	?>
  <div class="item" style="background-image: url('<?=$banner['url']?>')">
    <h2><?=$banner['info']?></h2>
  </div>
<?php
}
?>
    </div>


    </section>

    <section class="gradient-wrapper">
      <div class="container">
        <div class="row text-center">
          <p class="main-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptater.</p>

          <a href="#" class="my-btn force-center mt-40" title="Saiba Mais">Saiba Mais</a>
        </div>

        <div class="row my-80 profiles">
          <div class="col-md-4 text-center">
            <img width="120" height="120" src="assets/img/nick1.png" alt="O Invador" title="O Inovador">
            <p class="group mt-1 text-white">Inovador</p>

            <h4 class="mt-4 text-white">Antonio Frontier</h4>
            <h5 class="text-white">HTML</h5>

            <p class="mt-2 text-white">"Trabalhar com HTML é como ser arquiteto com código, permitindo que uma mensagem seja transmitida de forma eficientee inteligível."</p>
          </div>

          <div class="col-md-4 text-center">
            <img width="120" height="120" src="assets/img/nick2.png" alt="O Pensador" title="O Pensador">
            <p class="group mt-1 text-white">Pensador</p>

            <h4 class="mt-4 text-white">Julia</h4>
            <h5 class="text-white">JAVASCRIPT</h5>

            <p class="mt-2 text-white">"Acho que executar funções no front trabalhando conteúdo e visual são a forma mais eficiente de proporcionar integração e interação com os usuários."</p>
          </div>

          <div class="col-md-4 text-center">
            <img width="120" height="120" src="assets/img/nick2.png" alt="O Sentimental" title="O Sentimental">
            <p class="group mt-1 text-white">Sentimental</p>

            <h4 class="mt-4 text-white">Ceise</h4>
            <h5 class="text-white">CSS</h5>

            <p class="mt-2 text-white">"Vejo as folhas de estilo como tinta, pincel e movimento, com os quais posso entregar ao usuário o visual planejado pela equipe, com interações eficientes."</p>
          </div>
        </div>

        <div class="row my-80 your-profile text-center">
          <div class="col-md-12">
            <h2 class="text-white">23% são Inovadores</h2>
            <h2 class="--bold text-white">Qual é o seu perfil?</h2>
          </div>
        </div>

        <div class="row my-80 two-columns">
          <div class="col-md-12">
            <div class="row text-white">
              <div class="col-md-3 border-right">
                <h2>Busca capacitação constante</h2>
              </div>
              <div class="col-md-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor.</p>
              </div>
            </div>

            <div class="row text-white">
              <div class="col-md-3 border-right">
                <h2>Gosta de aprender</h2>
              </div>
              <div class="col-md-9">
                <p>eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <aside class="col-lg-6">
            <h3 class="text-white">A poucos metros do Metrô Santa Cruz.</h3>
            <img width="250" height="150" class="mt-2 img-fluid" src="assets/img/map.jpg" alt="localização" title="nossa localização">
          </aside>

          <aside class="col-lg-5 offset-lg-1">
            <h3 class="text-white">Envie sua mensagem</h3>
            <form action="#" method="get" class="mt-2">
              <div class="form-group">
                <label for="nome">Seu nome*</label>
                <input type="text" id="nome" required>
              </div>

              <div class="form-group">
                <label for="email">Seu e-mail*</label>
                <input type="email" id="email" required>
              </div>

              <div class="form-group">
                <label for="tel">Seu telefone*</label>
                <input type="tel" id="tel" required placeholder="( ) ____ ____">
              </div>

              <input type="submit" value="ENVIAR">
            </form>
          </aside>
        </div>
      </div>

      <p class="text-white text-center mt-5">Cinetica.ag - 2020@Vítor_Chaves</p>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

    <script src="assets/js/scripts.js"></script>

  </body>


  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" />
</html>
