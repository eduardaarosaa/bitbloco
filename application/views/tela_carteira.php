        <div class="row">
			<div class="col-2 divMenu">
                <ul class="sidebar-nav">
                    <br>
                    <br>
                    <li> <h3> <font color="#FFF"> Menu </font> </h3> </li>
                    <br>	
                    <li> <a href="tela_perfil">Meu Perfil</a> </li>
                    <li> <a href="tela_carteira">Carteira</a> </li>
                    <li> <a href="tela_transferencia">Transferência</a> </li>
                    <li> <a href="tela_blockchain">Blockchain</a> </li>
                    <li> <a href="tela_simulacao">Simulação</a> </li>
                    <br>
                    <br>
                    <br>
                    <li> <a href="tela_login">Sair</a> </li>
                </ul>
			</div>
            <div class="col-1 divEspaco"></div>
			<div class="col-7 divRanking">
				<h1 class="display-4" align="center" style="color: #FFF"> Carteira</h1>
				
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
        </div>
        <div class="row">
            <div class="col-12 divEspaço">
            
            </div>
        </div>
