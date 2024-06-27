<?php
$dados = $dadosJogos->$codigo;
//print_r($dados);
?>
<div class="banner">
    <img src="<? $dados->banner ?>" alt="<?= $dados->nome ?>" class="w-100">
</div>
<div class="container">
    <h1 class="text-center"><?= $dados->nome ?></h1>
    <div class="row">
        <div class="row">
            <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="w-100">
        </div>
        <div class="col-12 com-md-9">
            <?= $dados->descricao ?>
        </div>
    </div>
    <h2 class="text-center">Fotos do Jogo</h2>
    <?php
    $dadosFotos = file_get_contents("http://localhost/frivo/api/fotos.php");
    $dadosFotos = json_decode($dadosFotos);
    
    $dados = $dadosFotos->$codigo;
    ?>
    <div class="row">
        <?php
        $i = 1;
        foreach ($dadosFotos as $dados) {
            ?>
            <div class="col-12 col-md-3">
                <a href="<?= $dados->foto ?>" title="Aumentar Foto" data-fslightbox>
                    <img src="<?= $dados->$foto ?>" alt="Foto <?= $i ?>" class="w-100">
                </a>
            </div>
            <?php
            $i++;
        }
        ?>