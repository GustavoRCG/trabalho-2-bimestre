<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/frivo/imagens/";

    $games[1] = array("id"=>1, "nome"=>"LabfyGize", "descricao"=>"<p>LabfyGize é um jogo de plataforma e puzzle, desenvolvido por nossa colega de sala Emily.</p>
    <p>O objetivo do game é escapar das armadilhas do labirinto e pegar os baus do tesouro.</p>",
    "poster"=>"{$path}egito.png","banner"=>"{$path}logo_G.png");

    $games[2] = array("id"=>2, "nome"=>"A Trilha", "descricao"=>"<p>A Trilha é um jogo de plataforma estilo Super Mario. Criado por Gustavo Rodrigues Caldeira Guimarães.</p>
    <p>A historia do jogo se baseia em uma antiga lenda de uma vila, a qual dizia que aquele que completasse o caminho magico dos antigos anciões seria coroado rei.</p>
    <p>Então nosso herói Seninha se aventura nessa perigosa e misteriosa missão.</p>",
    "poster"=>"{$path}banneratrilha.png");

    $games[3] = array("id"=> 3, "nome"=>"As Trilhas do Labirinto", "As Trilhas do Labirinto", "descricao"=>"<p> As Trilhas do Labirinto e um jogo no qual o personagem precisa encontrar a saida do labirinto em que esta preso, porem, existem monstros no caminho, monstros esses que ele precisa destrui-los para assim conseguir escapar do labirinto</p>
     <p> Criado por Mateus</p>",
    "poster"=>"{$path}banneratdl.png");
   
    echo json_encode($games);