            <div class="col-1 divEspaco"></div>
      <div class="col-7 divConteudo">
        <div class="jumbotron">
    <h1 class="display-4">Transferência</h1>
    <p class="lead">Você pode realizar transferências de bitcoin, basta ter o número da carteira de quem deseja enviar, fácil e rápido.</p>
    <hr class="my-4">
    <p>Realize suas transações preencha os campos abaixo.</p>
    <?php
         		    echo form_open_multipart('Welcome/transferencia');
           		?>

      <div class="form-group">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="carteira"placeholder="Digite o número da carteira">
      </div>
      <div class="form-group">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantidade" placeholder="Digite a quantidade de bitcoins">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
      <?php
 					 echo form_close();
 			 		?>
  </div>
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
