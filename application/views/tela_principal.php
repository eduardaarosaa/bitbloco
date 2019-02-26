<!doctype html> <!-- tag HTML5 -->
<html>

  <head>
  
    <!-- Tags necessárias para o funcionamento bootstrap -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- arquivo Bootstrap CSS -->
	<link rel="stylesheet" href="../../bootstrap-4.3.1/dist/css/bootstrap.min.css">   
    <!-- tag do projeto -->
    <link href="../../style/estilo.css" rel="stylesheet"/>
	<!-- titulo do projeto -->
    <title> BitBloco - Painel Principal </title>
    
  </head>
  
  <body>
  
	<div class="container">
		<div class="row">
			<div class="col-1 divLogo"></div>
			<div class="col-10 divNavbar">
				<nav class="navbar navbar-inverse">
  					<div class="container-fluid">
    					<div class="navbar-header">
      					<a class="navbar-brand" href="../../README.md" title="Informações do projeto">
                        <font color="#FFF">Seu simulador de cryptotransações</font></a>
    					</div>
    					<form class="navbar-form navbar-left" action="/action_page.php">
      						<div class="input-group">
        					<input type="text" class="form-control" placeholder="Search" name="search">
        						<div class="input-group-btn">
          							<button class="btn btn-dark" type="submit">
                                    Pesquisar
            						<i class="glyphicon glyphicon-search"></i>
          							</button>
        						</div>
      						</div>
    					</form>
  					</div>
				</nav>
            </div>
			<div class="col-1 divEspaco"><img src="../../image/user.png" height="60" width="60"></div>		
		</div>
		<div class="row">
			<div class="col-12 divEspaco"></div>
		</div>
		<div class="row">
			<div class="col-2 divMenu">
                		<ul class="sidebar-nav">
                        	<li> <h3> <font color="#FFF"> Menu </font> </h3> </li>	
                            <li> <a href="#">Carteira</a> </li>
                    		<li> <a href="#">Transferência</a> </li>
                    		<li> <a href="#">Blockchain</a> </li>
                    		<li> <a href="#">Simulação</a> </li>
							<br>
                            <br>
                            <br>
                            <br>
                            <br>
                    		<li> <a href="#">Sair</a> </li>
                		</ul>
			</div>
			<div class="col-1 divEspaco"></div>
			<div class="col-7 divRanking">Aqui vai o Ranking</div>
			<div class="col-1 divEspaco"></div>
		</div>			
	</div>
  </body>
</html>