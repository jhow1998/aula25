<?php

$servidor = 'localhost';
$user = 'root';
$senha = "";
$bd = 'blog';

$con = mysqli_connect($servidor,$user,$senha,$bd);

if(!$con){
    echo 'não conectou';
}