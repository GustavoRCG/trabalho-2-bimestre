<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frivo</title>

  <meta name="description" content="Sua pagina de games, com lancamentos de jogos pagos e gratuitos">

  <meta name="keywords" content="games, jogos, lancamentos">

  <base href="http://localhost/Frivo/">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Jersey+15&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="imagens/Frivo-logo/icone.png">

</head>

<body>

  <?php
  //buscar os dados da api de games
  $url = "http://localhost/Frivo/api/games.php";
  $context = stream_context_create(
    array(
      "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
      ),
    )
  );
  $dadosApi = file_get_contents($url, false, $context);
  //importar dados da API
  $dadosApi = file_get_contents($url);
  //transforamr de json para array ou objeto
  $dadosJogos = json_decode($dadosApi);
  //print_r($dadosJogos);
  ?>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="imagens/logo.png" alt="Frivo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quem-somos">Quem somos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Games
            </a>
            <ul class="dropdown-menu">
              <?php
              foreach ($dadosJogos as $dados) {
                echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a></li>";
              }
              ?>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <a href="arquivo.zip" title="download dos arquivos" class="btn btn-warning">
            <i class="fas fa-download"></i>
            Arquivos
          </a>
          <a href="contato" title="contato" class="btn btn-info">
            <i class=" fas fa-envelope"></i>
            Entre em Contato
          </a>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <?php
    //print_r($_GET);
    $pagina = "home";
    //verificar se foi clicado em algum menu
    if (isset($_GET["pagina"])) {
      $pagina = $_GET["pagina"] ?? "home";
      // games/1
      $pagina = explode("/", $pagina);
      //print_r($pagina);
      $codigo = $pagina[1] ?? NULL;
      $pagina = $pagina[0] ?? "home";
    }

    $pagina = "pages/{$pagina}.php";

    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "pages/erro.php";
    }
    ?>
  </main>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script scr="js/aos.js"></script>
  <script scr="js/fslightbox.js"></script>
</body>

</html>