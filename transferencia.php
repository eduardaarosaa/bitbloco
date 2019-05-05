<?php
include "menu.php";
?>

<div class="col-1 divEspaco"></div>
<div class="col-7 divConteudo">
  <div class="jumbotron">
<h1 class="display-4">Transferência</h1>
<p class="lead">Você pode realizar transferências de bitcoin, basta ter o número da carteira de quem deseja enviar, fácil e rápido.</p>
<hr class="my-4">
<p>Realize suas transações preencha os campos abaixo.</p>
<form method="POST" action="realizar_transf.php">
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="envio" placeholder="Digite o número da sua carteira">
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="carteira" placeholder="Digite o número da carteira que vai receber os bitcoins">
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantidade_btc" placeholder="Digite uma quantidade de bitcoins">

 </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</div>
</div>



<?php
include "footer.php";

?>