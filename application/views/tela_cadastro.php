<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../style/cadastro.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Cadastro</h5>
            <div class="row">
                <div class="col-md-12">
            <img src="../../image/logo_semfundo.png" class="img-responsive centralizar" width="100px" align="center">
</div>
</div>
          <?php
             echo form_open_multipart('Welcome/adduser');
           ?>
            <form class="form-signin">
            <div class="form-label-group">
                <input type="text" id="inputEmail" name="nome" class="form-control" placeholder="Nome" required autofocus>
                <label for="inputEmail">Nome</label>
              </div>
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mail" required autofocus>
                <label for="inputEmail">E-mail</label>
              </div>
              

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                <label for="inputPassword">Senha</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Cadastrar</button>
              <?php
                echo form_close();
              ?>
              <hr class="my-4">
            </form>
            <a href="tela_login"><button class="btn btn-primary">Voltar</button></a>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>