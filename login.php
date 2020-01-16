<?php require_once('conn/connect.php') ?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/OnLoadLogin.js"></script>
  <!--<script src="js/jquery.js"></script>-->
  <!--<script src="js/bootstrap.min.js"></script>-->

	<script type="text/javascript">
		history.forward();
	</script>

	<style type="text/css">
	 body{background-color: white;}
	 .bslf{
		 width: 350px;
		 margin: 120px auto;
		 padding: 25px 20px;
		 background: #EEEEEE;
		 box-shadow: 2px 2px 4px #cecece;
		 border-radius: 5px;
		 color: #606060;
	 }
	 .bslf h2{
		 margin-top: 0px;
		 margin-bottom: 15px;
		 padding-bottom: 5px;
		 border-radius: 10px;
		 border: 1px solid #9a9a9a;
	 }
	 .bslf a{color: #9a9a9a;}
	 .bslf a:hover{
		 text-decoration: none;
		 color: #9a9a9a;
	 }
	 .bslf .checkbox-inline{padding-top: 7px;
	 }
</style>
	</head>
	<body>
		<div id="cabecera_izquierda">
					<img src="img/titulo.png" width="100%" id="header">
		</div><br>
		<h3 align="center"><strong>Gesti&oacuten de Proyectos</strong></h3>
		<div class="bslf">
	    <form name="formlogin" id="formlogin" action="php/valida.php" method="post">
	      <h2 class="text-center">Registro</h2>
	      <div class="form-group">
	        <input type="text" class="form-control" name="Usuario" id="Usuario" placeholder="Usuario" required="required" autofocus>
	      </div>
	      <div class="form-group">
	        <input type="password" class="form-control" name="Password" placeholder="Contraseña" required="required">
	      </div>
	      <div class="form-group clearfix">
	        <center><input type="submit" class="btn btn-primary pull-right"></input>
				</div>
			<center><td><a href="loginadmin.php" align=center class="btn__update" >Acceso Admninistrativos</a></td>
	    </form>
	  </div>
</body>
</html>
