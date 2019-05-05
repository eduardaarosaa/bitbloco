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



                <h3>Resolva esse enigma</h3>
                <p>Se 3 gatos matam 3 ratos em 3 minutos, quanto tempo levarão 100 gatos para matar 100 ratos? (minutos)
                
                </p>
                <input  class="form-control" type='number' name="carteira" placeholder="Digite o número da sua carteira"><br>
                <input  class="form-control" type='text' name='resposta'  placeholder="Digite sua resposta">
                <h6>Digite apenas números</h6>
                <br>
                <h3>Boa sorte!!!</h3>
                
                <br>
                <input type="submit"  class="btn btn-primary" value="Enviar"><br>

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