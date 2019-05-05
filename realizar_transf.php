<?php

$link = mysqli_connect('localhost','root','','bitbloco');

$envio = $_POST['envio'];
$carteira = $_POST['carteira'];
$quantidade = $_POST['quantidade_btc'];

$update = "update usuario set quantidade=quantidade+$quantidade where carteira = $carteira";
mysqli_query($link,$update);

if($update == true ){

    echo "Ok";
}

$update1 = "update usuario set quantidade = quantidade-$quantidade where carteira = $envio";
mysqli_query($link,$update1);

if($update == true){

    echo "Ok";
}




?>