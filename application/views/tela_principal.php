<?php
if ( $this->session->userdata('login') == true ) {  
		$nome = $this->session->userdata('nome');
   
} else { 
	redirect("Welcome/tela_login", 'redirect');
	
	} 
?> 

<div class="col-1 divEspaco"></div>
			<div class="col-7 divConteudo">
                <div class="jumbotron">
               		<h1 class="display-4"> Ranking </h1>
					<p class="lead">Deseja ficar entre os primeiros colocados?</p>
					<p>Minere um bitcoin na prova de trabalho</p>
					<hr class="my-4">
					<table class="table table-striped table-sm-3 table-bordered">	
					<thead class="table-dark">
						<tr>
							<th><center>Posição</center></th>
							<th><center>Nome</center></th>
							<th><center>Quantidade</center></th>
					</thead>
					<tbody>

						<?php 

						$cont = 1;
						foreach($dados as $row){ ?>
						
						<tr>
							<td><?php echo $cont++;?></td>
							<td><?php echo $row->nome;?></td>
							<td><?php echo $row->quantidade;?></td>
						</tr>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
        </div>
		<div class="col-1 divEspaco">
            
        </div>
        </div> <!-- fechando a linha que inicia no arquivo menu.php -->
