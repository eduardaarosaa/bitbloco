<?php

include "menu.php";
?>
<div class="col-1 divEspaco">


</div>


<div class="col-7">
    <div class="jumbotron">


        <form name="form1" method="POST" action="resposta_prova.php">

            <h3>Prova de trabalho</h3>

            <p>"Proof-of-Work" (prova do trabalho em tradução literal) ou PoW, é o algorítimo de consenso original em uma rede Blockchain. </p>

            <p>Na Blockchain, este algoritimo é usado para confirmar transações e produzir novos blocos para a cadeia. Com o PoW, os mineradores competem entre si para completar as transações e serem recompensados.</p>

            <p>Os princípios mais importantes da prova de trabalho são um complicado enigma matemático e a possibilidade de provar rapidamente a solução.</p>



            <h3>Resolva esses enigmas</h3>
            <h4>Problema A </h4>
            <p>Se 3 gatos matam 3 ratos em 3 minutos, quanto tempo levarão 100 gatos para matar 100 ratos? (minutos)

            </p>
            <input class="form-control" type='text' name='resposta' placeholder="Digite sua resposta do problema A">
            <br>
            <h4>Problema B </h4>
            <p>Numa granja havia 132 galinhas num galinheiro e 40 em outro. O granjeiro vendeu 58 galinhas. Quantas galinhas ainda havia?</p>
            <input class="form-control" type='text' name='resposta1' placeholder="Digite sua resposta do problema B"><br>
            <h6>Para receber a recompensa digite o número da sua carteira</h6>
            
            <input class="form-control" type='number' name="carteira" placeholder="Digite o número da sua carteira"><br>
            <br>
            <h3>Boa sorte!!!</h3>

            <br>
            <input type="submit" class="btn btn-primary" value="Enviar"><br>

        </form>
    </div>

</div>
<div class="col-1 divEspaco"></div>

<!-- fechando a linha que inicia no arquivo menu.php -->
</div>
<div class="row">
    <div class="col-12 divEspaço"></div>

</div>


<?php

include "footer.php";

?>