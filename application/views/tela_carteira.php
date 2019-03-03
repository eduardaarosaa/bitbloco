            <div class="col-1 divEspaco"></div>
			<div class="col-7 divConteudo">
				<h1 class="display-4" align="center"> Carteira</h1>
				
                <?php
                include("arohamQR.php");
                $arohamQR = new arohamQR();
                echo "<div class='row'>";
                echo "<div class='col-md-12' align='center'>";
			$arohamQR->text("033558545666844775"); // ( TEXT )
            echo "<img src='".$arohamQR->get_link()."' border='0' width='280'/>";
            echo "</div>";
            echo "</div>";
            echo "<div class='row'>";
            echo "<div class='col-md-12'>";
            echo "<h3 align='center'>Quantidade:</h3>";
            echo "</div>";
            echo "</div>";
		    ?>
			</div>
			<div class="col-1 divEspaco">
            
            </div>
        <!-- fechando a linha que inicia no arquivo menu.php -->
        </div>
        <div class="row">
            <div class="col-12 divEspaço">
            
            </div>
        </div>
