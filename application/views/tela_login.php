<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Bitbloco - Acesso </title>

  <!-- Bootstrap core CSS -->
  <link href="../../bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../style/signin.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
    <form class="form-signin" action="tela_principal">
    <?php
         		    echo form_open_multipart('Welcome/login');
           		?>
      <h2 class="form-signin-heading"><img src="../../image/logoLogin.png"/></h2>
      <label for="inputUser" class="sr-only">Usuário</label>
      <input id="inputUser" name="email" class="form-control" placeholder="Usuário" required autofocus type="text">
      <label for="inputPassword" class="sr-only">Password</label>
      <input id="inputPassword" name="senha" class="form-control" placeholder="Senha" required type="password">
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

      <div class="row">
        <div class="col-md-7"><a class="btn btn-link" style="color: #000" href="tela_senha" role="button">Esqueci a senha</a></div>
        <div class="col-md-5"><a class="btn btn-link pull-right " style="color: #000" href="tela_cadastro" role="button">Registrar</a></div>
      </div>
      <?php
 					 echo form_close ();
 			 		?>

    </form>
  </div>
</div>
</div>

  		</div> <!-- /container -->
	</body>
</html>