<?php

include "menu.php";

?>

<div class="col-1 divEspaco">
				

			</div>
				

			<div class="col-7">
            <div class="jumbotron">

            <?php

$link = mysqli_connect('localhost','root','','bitbloco');

$carteira = $_POST['carteira'];
$resposta = $_POST['resposta'];
$resposta1 = $_POST['resposta1'];

if($resposta == 3 and $resposta1 == 114){

    echo "Parabéns!! Você ganhou um bitcoin";

    $update = "update usuario set quantidade=quantidade+1 where carteira = $carteira";
    mysqli_query($link,$update);

}
else{

    echo "Errou!! Tente novamente";

}
?>
                
        </div>
				
			</div>
			<div class="col-1 divEspaco"></div>

        <!-- fechando a linha que inicia no arquivo menu.php -->
        </div>
        <div class="row">
            <div class="col-12 divEspaço"></div>

        </div>

 <?php
include "footer.php"

?>


