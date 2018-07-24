<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type = "text/css"
           href = "<?php echo base_url(); ?>assets/css/homepagestyle.css">
           <script type="text/javascript" src="<?php echo base_url();?>assets/js/homepagejs.js"></script>
  <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
</head>

<body>

<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url();?>index.php/Adm_c/mainmenu">Início</a>
	</div>

	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<span class="caret"></span></a>
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3">
    					<ul>
							<li class="dropdown-header">Responsáveis e Setores</li>
							              <li><a href="<?php echo base_url();?>index.php/Responsavel_c">Responsável</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Setor_c">Setor</a></li>

							<li class="divider"></li>
							<li class="dropdown-header">Localização e Local</li>
                            <li><a href="<?php echo base_url();?>index.php/Localizacao_c">Localização</a></li>

						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Categorias e Marcas</li>
							<li><a href="<?php echo base_url();?>index.php/Categoria_c">Categoria</a></li>
              <li><a href="<?php echo base_url();?>index.php/Marca_c">Marca</a></li>

						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Status e Administradores</li>
                            <li><a href="<?php echo base_url();?>index.php/Status_c">Status</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Adm_c/admscrud">Administrador</a></li>

						</ul>

					</li>
				</ul>
			</li>
            <li><a href="<?php echo base_url();?>index.php/Recebimentoequipamento_c">Registrar Equipamento</a></li>
            <li><a href="<?php echo base_url();?>index.php/Retirarequipamento_c">Retirar Equipamento</a></li>
		        </ul>
            <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultas<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url();?>index.php/Consultas_c">Consulta dinâmica</a></li>
              </ul>
            </li>
          </ul>


        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Olá, <?php echo $this->session->userdata['logged_in']['login'];?> <strong>[<?php echo $this->session->userdata['logged_in']['email']; ?>/<?php echo $this->session->userdata['logged_in']['matricula']; ?>]</strong> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url();?>index.php/Adm_c/editaradmlogado/<?php echo $this->session->userdata['logged_in']['id'];?>">Alterar dados pessoais</a></li>


            <li class="divider"></li>
              <li><a href="<?php echo base_url();?>index.php/Adm_c/logout">Logout de " <strong><?php echo $this->session->userdata['logged_in']['login'];?> "</strong> ?</a></li>
          </ul>
        </li>

      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
</div>


<br>
<center>
  <h2>Olá <strong><?php echo $this->session->userdata['logged_in']['login'];?></strong>, bem-vindo(a), aqui você poderá ver suas atividades diárias.</h2>

<a href="http://www.site.com/" onmouseover="responsiveVoice.speak('fala muleque hehe!!')" >xx</a>
  <input id="" onclick="responsiveVoice.speak('fala muleque hehe!!');" type="button" value="Play" />

  <p>This example uses the HTML DOM to assign an "onmouseover" and "onmouseout" event to a h1 element.</p>


<h1 id="demo">Mouse over me</h1>

<script>
document.getElementById("demo").onmouseover = function() {mouseOver()};
document.getElementById("demo").onmouseout = function() {mouseOut()};

function mouseOver() {
    document.getElementById("demo").style.color = "red";
}

function mouseOut() {
    document.getElementById("demo").style.color = "black";
}
</script>

<center>
  <br>
  <br>
  <br>



</body>
</html>
