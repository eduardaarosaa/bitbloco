<?php
if ( $this->session->userdata('login') == true ) {  
		$nome = $this->session->userdata('nome');
		$cod = $this->session->userdata('cod');
        $quantidade = $this->session->userdata('quantidade');
        $carteira = $this->session->userdata('carteira');
   
} else { 
	redirect("Welcome/login", 'redirect');
	
	} 
?> 
            <div class="col-1 divEspaco"></div>
			<div class="col-7 divConteudo">
                <div class="jumbotron">
				<h2 class="display-4" align="center">Meu Perfil</h2>
				
                <h5>Nome:</h5>
                <br>
                <p> <?php echo $nome ?></p>

                <h5>Carteira:</h5>
                <br>
                <p> <?php echo $carteira ?></p>

                <h5>Quantidade de bitcoins:</h5>
                <br>

                <p><?php echo $quantidade ?></p>
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
