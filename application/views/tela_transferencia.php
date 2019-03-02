<div id="loader" class="loader"></div>
<div style="display:none" id="tudo_page">
<div class="container-fluid">
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
  <div class="col-9 jumbotron">
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