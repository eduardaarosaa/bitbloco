<?php



if ( $this->session->userdata('login') == true ) {  
        $carteira = $this->session->userdata('carteira');
        $quantidade = $this->session->userdata('quantidade');
        //var_dump($session);
   
} else { 
	redirect("Welcome/login", 'redirect');
	
	} 
?> 
            <div class="col-1 divEspaco"></div>
			<div class="col-7 divConteudo">
                <div class="jumbotron">
				<h2 class="display-4" align="center"> Carteira</h2>
				
                <?php
                include("arohamQR.php");
                $arohamQR = new arohamQR();
                echo "<div class='row'>";
                echo "<div class='col-md-12' align='center'>";
			$arohamQR->text($carteira); // ( TEXT )
            echo "<img src='".$arohamQR->get_link()."' border='0' width='180'/>";
            echo "</div>";
            echo "</div>";
            echo "<div class='row'>";
            echo "<div class='col-md-12'>";
            echo "<h4 align='center'>Quantidade:" . $quantidade ."</h4>";
            echo "</div>";
            echo "</div>";
		    ?>
			</div>
        </div>
			<div class="col-1 divEspaco">
            
            </div>
        <!-- fechando a linha que inicia no arquivo menu.php -->
        </div>
        <div class="row">
            <div class="col-12 divEspaço">
            
            </div>
        </div>
