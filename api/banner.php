<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/frivo/imagens/";

    $banners[0] = array("nome"=>"LabfyGize", "imagem"=>"{$path}bannerlabfygize.jpg","id_game"=>1);
    $banners[1] = array("nome"=>"A trilha", "imagem"=>"{$path}banneratrilha.png","id_game"=>2);
    $banners[2] = array("nome"=>"As Trilhas do Labirinto","imagem"=>"{$path}banneratdl.png","id_game"=>3);

    echo json_encode($banners);