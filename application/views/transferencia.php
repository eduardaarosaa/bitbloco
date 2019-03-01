<div id="loader" class="loader"></div>


<div style="display:none" id="tudo_page">
<div class="container">

<div class="row">

<div class="jumbotron">
  <h1 class="display-4">Transferência</h1>
  <p class="lead">Você pode realizar transferências de bitcoin, basta ter o número da carteira de quem deseja enviar, fácil e rápido.</p>
  <hr class="my-4">
  <p>Realize suas transações preencha os campos abaixo.</p>
  <form>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o número da carteira">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a quantidade de bitcoins">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>


</div>
</div>

<script>

jQuery(window).load(function () {
      $(".loader").delay(1200).fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});

</script>