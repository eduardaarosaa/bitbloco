<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Login </title>

  <!-- Bootstrap core CSS -->
  <link href="../../bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../style/signin.css" rel="stylesheet">

</head>

<body>

  <div class="container login">

    <form class="form-signin">
      <h2 class="form-signin-heading"><img src="../../image/logoLogin.png"/></h2>
      <label for="inputUser" class="sr-only">Usuário</label>
      <input id="inputUser" class="form-control" placeholder="Usuário" required autofocus type="text">
      <label for="inputPassword" class="sr-only">Password</label>
      <input id="inputPassword" class="form-control" placeholder="Senha" required type="password">
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

      <div class="row">
        <div class="col-md-6"><a class="btn btn-link" href="#" role="button">Esqueci a senha</a></div>
        <div class="col-md-6"><a class="btn btn-link pull-right " href="#" role="button">Registrar</a></div>
      </div>


    </form>

  		</div> <!-- /container -->
	</body>
</html>