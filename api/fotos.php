<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "http://localhost/frivo/imagens/";

$fotos[1] = "array"(
    array("foto"=>"{$path}lbfgz1.png"),
    array("foto"=>"{$path}lbfgz2.png"),
    array("foto"=>"{$path}egito.png"),
);

$fotos[2] = "array"(
    array("foto"=>"{$path}at1.png"),
    array("foto"=>"{$path}at2.png"),
);

$fotos[3] = "array"(
    array("foto"=>"{$path}atdl1.png"),
    array("foto"=>"{$path}atdl2.png"),
    array("foto"=>"{$path}atdl3.png"),
);
  
echo json_encode($fotos);