<?php
$url = "http://localhost/Frivo/api/banner.php";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);

//print_r($dadosBanner);
?>

<div id="carouselExample" class="carousel slide" data-aos="fade">
    <div class="carousel-inner">
        <?php
            foreach($dadosBanner as $dados) {
                ?>
                <div class="carousel-item active">
                    <a href="game/<?=$dados->id_game?>">
                        <img src="<?=$dados->imagem?>" class="d-block w-100"           alt="<?=$dados->nome?>">
                    </a>
                </div>
                <?php
            }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<main>
     <div class="container">
    <h1 class="text-center">Melhores Jogos</h1>
    <div class="row">
      <?php
      foreach ($dadosJogos as $dados) {
        ?>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="<?php echo $dados->poster; ?>" alt="<?php echo $dados->nome ?>"  class="card-img-top">
            <div class="card-body text-center">
                <p><strong><?=$dados->nome?></strong></p>
                <p>
                 <a href="game/<?$dados->id?>" class="btn btn-danger">
                    <i class="fas fa-search"></i>
                    Detalhes do Jogo
                 </a>
                </p>
            </div>
        </div>
        </div>
        <?php
      }
      ?>


    </div>
</main>