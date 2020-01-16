<?php require_once('conn/connect.php') ?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset= ISO-8859-1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Proyectos GINP 2020</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/ajaxB.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style media="screen">
		.my-custom-scrollbar {
		position: relative;
		height: 550px;/*Height table StatusOTs*/
		overflow: auto;
		}
		.table-wrapper-scroll-y {
		display: block;
		}
		body {
		padding-top: 0px;
		padding-bottom: 20px;
		overflow:hidden;
		background-color:  #FFFFFF;
		/*
		#cfcfcf Gris
		#FFFFFF Blanco
		#EEEEEE Gris claro
		#F3F3F3 Gris claro2
		*/
		}
		/*Estilo para bullet Ok*/
		.dot {
  		height: 25px;
  		width: 25px;
  		background-color: #4db332;/*Green*/
  		border-radius: 50%;
  		display: inline-block;
		}
		th
					 {
							 /*background-color: grey;*/
							 color: white;
							 text-align: center;
							 vertical-align: bottom;
							 /*height: 150px;*/
							 padding-bottom: 3px;
							 padding-left: 5px;
							 padding-right: 5px;
					 }

					 .verticalText
					 {
							 text-align: center;
							 vertical-align: middle;
							 width: 20px;
							 margin: 0px;
							 padding: 0px;
							 padding-left: 3px;
							 padding-right: 3px;
							 padding-top: 10px;
							 white-space: nowrap;
							 -webkit-transform: rotate(-90deg);
							 -moz-transform: rotate(-90deg);
					 };
		</style>
	</head>
	<body>

	<!--<script>
	function linkOts(a) {
		window.location="../ots/login.php?Area='DISA'";
		return true;
	}
</script>-->

    <div id="cabecera_izquierda">
          <img src="img/titulo.png" width="100%" id="header">
    </div>

		<div class="container col-sm-12">
			<div class="form-group row">
				<div class="col-sm-12">
				<p align="right"><a style="color:#FF5A43" href="login.php"><span class="glyphicon glyphicon-log-in"></span><strong>Login</strong></a></p>
				</div>

			</div>
		</div>
<div class="">

	<input class="form-control" type="hidden" value="<?php echo trim($_GET["ExpedienteUser"]); ?>" name="ExpedienteUser" id="ExpedienteUser">
	<input class="form-control" type="hidden" value="<?php echo trim($_GET["NombreCompletoUser"]); ?>" name="NombreCompletoUser" id="NombreCompletoUser">
	<input class="form-control" type="hidden" value="<?php echo trim($_GET["Area"]); ?>" name="Area" id="Area">
	<input class="form-control" type="hidden" value="<?php echo trim($_GET["Usuario"]); ?>" name="Usuario" id="Usuario">
	<input class="form-control" type="hidden" value="<?php echo trim($_GET["TipoCuentaUser"]); ?>" name="TipoCuentaUser" id="TipoCuentaUser">
</div>
		<nav>
		  <div class="nav navbar-light nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-inicial-tab" data-toggle="tab" href="#nav-inicial" role="tab" aria-controls="nav-inicial" aria-selected="true">Inicio</a>

				    <a class="nav-item nav-link" id="nav-tabla-act-tab" data-toggle="tab" href="#nav-tabla-act" role="tab" aria-controls="nav-tabla-act" aria-selected="false">Tablero de actividades</a>
						<a class="nav-item nav-link" id="nav-entradas-ots-tab" data-toggle="tab" href="#nav-entradas-ots" role="tab" aria-controls="nav-entradas-ots" aria-selected="false">Actualizar actividad</a>
						<a class="nav-item nav-link" id="nav-NuevosProyectosEdit-tab" data-toggle="tab" href="#nav-NuevosProyectosEdit" role="tab" aria-controls="nav-NuevosProyectosEdit" aria-selected="false">Tareas/Proyectos</a>

				<a style="color:blue;" class="nav-item nav-link" id="TabData" data-toggle="tab" href="#nav-inicial" role="tab" aria-controls="" aria-selected="false">
				Usuario: <strong><?php echo $_GET["Usuario"];?></strong> &Aacuterea: <strong><?php echo utf8_decode($_GET["Area"]);?></strong> Cuenta: <strong><?php echo $_GET["TipoCuentaUser"];?></strong></a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-inicial" role="tabpanel" aria-labelledby="nav-inicial-tab">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  				</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      			<img src="img/b2.jpg" class="d-block w-100" alt="...">
    			</div>
    		<div class="carousel-item">
      			<img src="img/b3.jpg" class="d-block w-100" alt="...">
    		</div>
    		<div class="carousel-item">
      			<img src="img/b4.jpg" class="d-block w-100" alt="...">
    		</div>
				<div class="carousel-item">
      			<img src="img/a.jpg" class="d-block w-100" alt="...">
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Anterior</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Siguiente</span>
  		</a>
			</div>
		</div>

		<!--***********************************Inicio Tablero Actividades *****************************************************-->
<div class="tab-pane fade" id="nav-tabla-act" role="tabpanel" aria-labelledby="nav-tabla-act-tab">
	<?php
		$Area = utf8_decode(trim($_GET["Area"]));
		if ($_GET["TipoCuentaUser"]=='admin'){
			$consulta = "SELECT * FROM actividades ORDER BY Tarea DESC";
			}else{
				$consulta = "SELECT * FROM actividades WHERE Area='$Area' ORDER BY Tarea DESC";
			}
			$resultado = $connect->query($consulta);
			$fila = mysqli_fetch_assoc($resultado);
			$total = mysqli_num_rows($resultado);
	?>
	<?php if ($total>0) { ?>
		<div id="actividades_b" class="container-fluid col-sm-12">
		 <div class="form-group"><br>
			 <div class="row">
				<div class="col-sm-12">

					<form action="" method="post" name="search_form" id="search_form">

						<div class="container col-sm-12">
							<div class="form-group row">

								<div class="col-sm-4">
									<div id="Entradas" class="tabcontent">
									<div class="col-sm-12 center">
										<label for="search_actividad">Actividad</label>
										<input class="form-control" type="text" name="search_actividad" id="search_actividad">
									</div>
								</div>
								</div>

								<div class="col-sm-3">
									<label for="search_proyecto">Proyecto</label>
									<select class="form-control" name="search_proyecto" id="search_proyecto">
										<option>Todas</option>
										<option>Normal</option>
										<option>Alta</option>
										<option>Urgente</option>
									</select>
								</div>

								<div class="col-sm-2">
									<label for="search_prioridad">Prioridad</label>
									<select class="form-control" name="search_prioridad" id="search_prioridad">
										<option>Todas</option>
										<option>Normal</option>
										<option>Alta</option>
										<option>Urgente</option>
									</select>
								</div>

								<div class="col-sm-2">
									<label for="search_estado">Estado</label>
									<select class="form-control" name="search_estado" id="search_estado">
										<option>Todas</option>
										<option>Abierta</option>
										<option>Cerrada</option>
										<option>Retrasada</option>
									</select>
								</div>

								<div class="col-sm-1"><br>
									<button type="button" class="btn btn-info" name="buscar" id="buscar">Buscar</button>
								</div>

							</div>
							<div id="resultados"></div>
						</div>

					<div id="actividades" class="container-fluid col-sm-12">
					 <div class="form-group">

						<div class="row">
						<div class="col-sm-12">

							<div class="table-responsive">
								<h5>Registradas en <?php echo $Area; ?>: <?php echo $total; ?></h5>
								<table class="table table-bordered table-striped mb-0 table-wrapper-scroll-y my-custom-scrollbar">

									<thead bgcolor="#6790C6">

										<tr>
											<th colspan="4" scope="colgroup">A c t  i v i d a d e s</th>
											<th colspan="4" scope="colgroup">A v a n c e s</th>
											<th colspan="3" scope="colgroup">F e c h a s</th>
											<th colspan="2" scope="colgroup">I n f o r m a c i &oacute n</th>
										</tr>

										<tr>
											<th><font size="-1">Tarea</font></th>
											<th><font size="-1">Actividad</font></th>
											<th><font size="-1">=Realizada=</font></th>
											<th><font size="-1">Adjunto</font></th>
											<th><font size="-1">Avance</font></th>
											<th><font size="-1">Estatus</font></th>
											<th><font size="-1">Prioridad</font></th>
											<th><font size="-1">D&iacuteas para vencimiento</font></th>
											<th><font size="-1">==Inicio==</font></th>
											<th><font size="-1">Vencimiento</font></th>
											<th><font size="-1">==Cierre==</font></th>
											<th><font size="-1">Notas</font></th>
											<th><font size="-1">Oficio</font></th>
										</tr>

									</thead>
									<tbody>
									<?php do { ?>
									<tr>
												<td style="text-align:center;"><font size="-1"><?php echo $fila['Tarea'];?></font></td>
												<td><font size="-1"><?php echo $fila['Actividad'];?></font></td>
												<td style="text-align:center;"><font size="-1"><?php echo date('d-m-Y',strtotime($fila['FechaActividad']));?></font></td>
												<?php
												echo "<td style='text-align:center;'><img src='img/ico-reporte.png' height='35' width='35'></td>";
												?>
												<td style="text-align:center;"><font size="-1"><?php echo $fila['AvancePorcentaje'];?>%</font></td>

												<!-- P L A Z O-->
												<?php
															$hoy= new DateTime();
															$FInicio = $fila['FechaInicio'];
															$FVencimiento = $fila['FechaVencimiento'];
															$date1 = new DateTime($fila['FechaInicio']);
															$date2 = new DateTime($fila['FechaVencimiento']);
															$diff = $date1->diff($date2);
															$Plazo = $diff->days;

															$diffQ = $date2->diff($hoy);
															$Quedan = $diffQ->days;
												?>
												<!---------------------->

												<!-- S E M A F O R O-->
												<?php
													if ($Plazo<=5 and trim($fila['EstadoDeLaActividad'])=='ABIERTA'):
															echo "<td style='text-align:center;'><img src='img/ico-reloj-amarillo.png' height='38' width='36'></td>";
														elseif ($Plazo>=5 and trim($fila['EstadoDeLaActividad'])=='ABIERTA'):
															echo "<td style='text-align:center;'><img src='img/ico-reloj-azul.png' height='38' width='35'></td>";
															elseif (trim($fila['EstadoDeLaActividad'])=='CERRADA'):
																echo "<td style='text-align:center;'><img src='img/ico-cerrada.png' height='35' width='35'></td>";
														else:
															echo "<td style='text-align:center;'><img src='img/ico-reloj-rojo.png' height='35' width='35'></td>";
														endif;
												?>
												<!---------------------->
												<td style="text-align:center;"><font size="-1"><?php echo $fila['PrioridadDeLaActividad'];?></font></td>

												<?php
												if (trim($fila['EstadoDeLaActividad'])!='CERRADA'){
													echo "<td style='text-align:center;'><font size='-1'>".$Quedan."</font></td>";
												}else{
													echo "<td style='text-align:center;'><font size='-1'>-</font></td>";
												}
												?>

												<?php
													if (trim($fila['EstadoDeLaActividad'])=='RETRASADA'):
														$ColorEstadoAct="red";
														elseif (trim($fila['EstadoDeLaActividad'])=='ABIERTA'):
															$ColorEstadoAct="blue";
														else:
															$ColorEstadoAct="grey";
														endif;
													//echo "<td style='text-align:center;'><font size='-1' color='$ColorEstadoAct'>".trim($fila['EstadoDeLaActividad'])."</font></td>";
												?>

												<td style="text-align:center;"><font size="-1"><?php echo date('d-m-Y',strtotime($fila['FechaInicio']));?></font></td>
												<td style="text-align:center;"><font size="-1"><?php echo date('d-m-Y',strtotime($fila['FechaVencimiento']));?></font></td>

												<?php
												$AnioCierre = date('Y', strtotime($fila['FechaCierre']));
												$AnioInicio = date('Y', strtotime($fila['FechaCierre']));
													if($AnioInicio<$AnioCierre){
														$fcierre=date('d-m-Y',strtotime($fila['FechaCierre']));
													}else{
														$fcierre="";
													}
												?>

												<td style="text-align:center;"><font size="-1"><?php echo $fcierre;?></font></td>
												<td style="text-align:left;"><font size="-1"><?php echo $fila['Notas'];?></font></td>
												<td style="text-align:center;"><a href="php/activpdf.php?GinpOficio=<?php echo $fila['GinpOficio'] ?>#toolbar=0"><font size="-1"><?php echo $fila['GinpOficio'];?></font></td>
											</tr>

											<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
										<?php }//Total >0
											elseif ($total>0 && $search=='') echo '';
											else echo '';
										?>
									</tbody>
						</table>

					</div><!-- Table responsive -->

				</div><!-- col sm 12 -->
				</div><!-- row -->

			</div><!-- form group row -->

		</div><!-- container-fluid -->
		</form>
	</div><!-- col-sm-12 -->
</div><!-- row -->
	</div><!-- form-group -->
	</div>
	</div>
			<!--***********************************Fin Tablero de Actividades **************************************************************-->

		<!--***********************************Inicio Tab Registro de Actividades **************************************************************-->
		<div class="tab-pane fade" id="nav-entradas-ots" role="tabpanel" aria-labelledby="nav-entradas-ots-tab">

			<script>
function showPrjs(str) {
	/*alert(str);*/
	if (str == "") {
		document.getElementById("txtHint").innerHTML = "";
		return;
		} else {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
			} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
					var table = document.getElementById('tableprjs');
					var val0 =table.rows[1].cells[0].innerHTML;
					document.getElementById("Clave_Proyecto").value = val0;
					var val1 =table.rows[1].cells[1].innerHTML;
					document.getElementById("Tipo").value = val1;
					var val2 =table.rows[1].cells[2].innerHTML;
					document.getElementById("Responsable_Proyecto").value = val2;
					var val3 =table.rows[1].cells[3].innerHTML;
					document.getElementById("Colaborador_Proyecto").value = val3;
					var val4 =table.rows[1].cells[4].innerHTML;
					document.getElementById("FechaInicio_Proyecto").value = val4;
					var val5 =table.rows[1].cells[5].innerHTML;
					document.getElementById("FechaVencimiento1_Proyecto").value = val5;
					var val6 =table.rows[1].cells[6].innerHTML;
					document.getElementById("FechaVencimiento2_Proyecto").value = val6;
					}
			};
			xmlhttp.open("GET","getprjs.php?q="+str,true);
			xmlhttp.send();
		}
}
</script>
			<form name="frm_actividades" method="POST" action="php/registro_actividades.php" enctype="multipart/form-data">
				<div class="">
					<input class="form-control" type="hidden" value="<?php echo $_GET["ExpedienteUser"]; ?>" name="ExpedienteUser" id="ExpedienteUser">
					<input class="form-control" type="hidden" value="<?php echo $_GET["NombreCompletoUser"]; ?>" name="NombreCompletoUser" id="NombreCompletoUser">
					<input class="form-control" type="hidden" value="<?php echo $_GET["Area"]; ?>" name="Area" id="Area">
					<input class="form-control" type="hidden" value="<?php echo $_GET["Usuario"]; ?>" name="Usuario" id="Usuario">
					<input class="form-control" type="hidden" value="<?php echo $_GET["TipoCuentaUser"]; ?>" name="TipoCuentaUser" id="TipoCuentaUser">
				</div>

				<?php
					$Area = $_GET["Area"];
					if ($_GET["TipoCuentaUser"]=='admin'){
						$consulta = "SELECT * FROM proyectos";
					}else{
						$consulta = "SELECT * FROM proyectos";
					}
					//$consulta = "SELECT * FROM proyectos";
					$resultado = $connect->query($consulta);
					$fila = mysqli_fetch_assoc($resultado);
					$total = mysqli_num_rows($resultado);
				?>

				<div class="container col-sm-12">
					<div class="form-group row">
					<div class="col-sm-8"><br>
						<label for="ProyectosCdt"><strong>Tarea/Proyecto</strong></label>
						<select style="background-color: #f7f9cb;" class="form-control" name="ProyectosCdt" id="ProyectosCdt" onchange="showPrjs(this.value)">
							<option>Seleccione una Tarea/Proyecto.</option>

						<?php if ($total>0) { ?>
									<h2>Resultados: <?php echo $total; ?></h2>
									<?php do { ?>
											<?php
												//$ProyectosCdt=$fila['Proyecto'];
												//$Ref_ProyectosCdt=$fila['Clave_Proyecto'];
											echo '<option>'.$fila['Proyecto'].'</option>';
											?>
									<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
						<?php }
						elseif ($total>0) echo '';
						else echo '<h2>No se encontraron resultados</p>';
						?>
						</select>
					</div>
					<div class="col-sm-2"><br>
						<label for="Clave_Proyecto">N&uacutemero de Tarea</label>
						<input style="background-color: #c2c2c2;" class="form-control" type="text" readonly="readonly" name="Clave_Proyecto" id="Clave_Proyecto">
					</div>
					<div class="col-sm-2"><br>
						<label for="Tipo">Prioridad</label>
						<input style="background-color: #c2c2c2;" class="form-control" type="text" readonly="readonly" name="Tipo" id="Tipo">
					</div>

					</div>

				</div>



				<div class="container col-sm-12">
					<div class="form-group row">

									<div class="col-sm-3">
										<label for="Estado_Actividad">Estado</label>
										<input style="background-color: #c2c2c2;" class="form-control" type="text" readonly="readonly" name="Estado_Actividad" id="Estado_Actividad">
									</div>

									<div class="col-sm-3">
										<label for="FechaInicio_Proyecto">Fecha inicio</label>
										<input style="background-color: #c2c2c2;" class="form-control" type="date" value="<?php echo date("Y-m-d");?>" readonly="readonly" name="FechaInicio_Proyecto" id="FechaInicio_Proyecto">
									</div>

									<div class="col-sm-3">
										<label for="FechaVencimiento1_Proyecto">Fecha vencimiento</label>
										<input style="background-color: #c2c2c2;" class="form-control" type="date" value="<?php echo date("Y-m-d");?>" readonly="readonly" name="FechaVencimiento1_Proyecto" id="FechaVencimiento1_Proyecto">
									</div>

									<div class="col-sm-3">
										<label for="FechaVencimiento2_Proyecto">Fecha cierre</label>
										<input style="background-color: #c2c2c2;" class="form-control" type="date" value="<?php echo date("Y-m-d");?>" readonly="readonly" name="FechaVencimiento2_Proyecto" id="FechaVencimiento2_Proyecto">
									</div>

					</div>
				</div>




				<div class="container col-sm-12">
					<div class="form-group row"><br>

						<div class="col-sm-6">
							<label for="Responsable_Proyecto">Responsable</label>
							<input style="background-color: #c2c2c2;" class="form-control" type="text" maxlength="50" name="Responsable_Proyecto" id="Responsable_Proyecto">
						</div>

						<div class="col-sm-6">
							<label for="Colaborador_Proyecto">Colaborador</label>
							<input class="form-control" type="text" maxlength="50" name="Colaborador_Proyecto" id="Colaborador_Proyecto">
						</div>


					</div>
				</div>

				<div class="container col-sm-12">
					<div class="form-group row"><br>
					<div class="col-sm-12">
						<label for="Actividad"><strong>Notas</strong></label>
						<textarea class="form-control" maxlength="500" name="Actividad" id="Actividad" rows="3" margin-left="0px" width="100%"></textarea>
					</div>
						</div>
				</div>

				<div class="container col-sm-12">
					<div class="form-group row">

						<div id="txtHint"><b></b></div>

						<div class="col-sm-2">
							<label for="Avance_Actividad">Avance %</label>
							<input class="form-control" type="number" min="0" max="100" name="Avance_Actividad" id="Avance_Actividad">
						</div>

									<div class="col-sm-2">
										<label for="Acumulado_tarea">% Acumulado</label>
										<input style="background-color: #c2c2c2;" class="form-control" type="text" readonly="readonly" name="Acumulado_tarea" id="Acumulado_tarea">
									</div>

								<div class="col-sm-8">
									<label for="AdjuntoActividad">Adjuntar archivo</label>
									<input type="file" accept="application/pdf" class="form-control-file" name="AdjuntoActividad" id="AdjuntoActividad" aria-describedby="fileHelp">
								</div>

					</div>
				</div>

				<div class="container">
						<p style="text-align:center;">
							<input class="btn btn-primary" type="submit" value="Guardar registro">
						</p>
				</div>
			</form>
		</div>
			<!--***********************************Fin Tab Registro de Actividades **************************************************************-->

			<!--***********************************Inicio Tab Nuevos Proyectos & Edit **************************************************************-->
			<div class="tab-pane fade" id="nav-NuevosProyectosEdit" role="tabpanel" aria-labelledby="nav-NuevosProyectosEdit-tab">











				<script>
	function showPrjsEdit(str) {
		/*alert(str);*/
		if (str == "Nuevo.") {
			document.getElementById("txtHintnpe").innerHTML = "";
			document.getElementById("Clave_Proyectonpe").readOnly = false;
			document.getElementById("Proyecto_Nuevonpe").value = "";
			document.getElementById("Clave_Proyectonpe").value = "";
			document.getElementById("Tiponpe").value = "";
			document.getElementById("Responsable_Proyectonpe").value = "";
			document.getElementById("Colaborador_Proyectonpe").value = "";
			document.getElementById("FechaInicio_Proyectonpe").value = "<?php echo date("Y-m-d");?>";
			document.getElementById("FechaVencimiento1_Proyectonpe").value = "<?php echo date("Y-m-d");?>";
			document.getElementById("FechaVencimiento2_Proyectonpe").value = "<?php echo date("Y-m-d");?>";
			document.getElementById("CdtAnalisisnpe").checked = false;
			document.getElementById("CdtDifusionnpe").checked = false;
			document.getElementById("CdtLedanpe").checked = false;
			document.getElementById("CdtInformaticanpe").checked = false;
			document.getElementById("CdtIdpnpe").checked = false;
			document.getElementById("CdtDisanpe").checked = false;
			document.getElementById("CdtTetranpe").checked = false;
			document.getElementById("CdtTelemandonpe").checked = false;
			document.getElementById("CdtMejoraContnpe").checked = false;
			return;
			} else {
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
				} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHintnpe").innerHTML = this.responseText;
						var table = document.getElementById('tableprjsEdit');
						var val0 =table.rows[1].cells[0].innerHTML;
						document.getElementById("Proyecto_Nuevonpe").value = val0;
						var val1 =table.rows[1].cells[1].innerHTML;
						document.getElementById("Clave_Proyectonpe").value = val1;
						document.getElementById("Clave_Proyectonpe").readOnly = true;
						var val2 =table.rows[1].cells[2].innerHTML;
						document.getElementById("Tiponpe").value = val2;
						var val3 =table.rows[1].cells[3].innerHTML;
						document.getElementById("Responsable_Proyectonpe").value = val3;
						var val4 =table.rows[1].cells[4].innerHTML;
						document.getElementById("Colaborador_Proyectonpe").value = val4;
						var val5 =table.rows[1].cells[5].innerHTML;
						document.getElementById("FechaInicio_Proyectonpe").value = val5;
						var val6 =table.rows[1].cells[6].innerHTML;
						document.getElementById("FechaVencimiento1_Proyectonpe").value = val6;
						var val7 =table.rows[1].cells[7].innerHTML;
						document.getElementById("FechaVencimiento2_Proyectonpe").value = val7;
						var val8 =table.rows[1].cells[8].innerHTML;
						document.getElementById("CdtAnalisisnpe").checked = val8;
						var val9 =table.rows[1].cells[9].innerHTML;
						document.getElementById("CdtDifusionnpe").checked = val9;
						var val10 =table.rows[1].cells[10].innerHTML;
						document.getElementById("CdtLedanpe").checked = val10;
						var val11 =table.rows[1].cells[11].innerHTML;
						document.getElementById("CdtInformaticanpe").checked = val11;
						var val12 =table.rows[1].cells[12].innerHTML;
						document.getElementById("CdtIdpnpe").checked = val12;
						var val13 =table.rows[1].cells[13].innerHTML;
						document.getElementById("CdtDisanpe").checked = val13;
						var val14 =table.rows[1].cells[14].innerHTML;
						document.getElementById("CdtTetranpe").checked = val14;
						var val15 =table.rows[1].cells[15].innerHTML;
						document.getElementById("CdtTelemandonpe").checked = val15;
						var val16 =table.rows[1].cells[16].innerHTML;
						document.getElementById("CdtMejoraContnpe").checked = val16;
						}
				};
				xmlhttp.open("GET","getprjsEdit.php?q="+str,true);
				xmlhttp.send();
			}
	}
	</script>
				<form name="frm_NvosPrjEdit" method="POST" action="php/registro_proyn.php" enctype="multipart/form-data">
					<div class="">
						<input class="form-control" type="hidden" value="<?php echo $_GET["ExpedienteUser"]; ?>" name="ExpedienteUser" id="ExpedienteUser">
						<input class="form-control" type="hidden" value="<?php echo $_GET["NombreCompletoUser"]; ?>" name="NombreCompletoUser" id="NombreCompletoUser">
						<input class="form-control" type="hidden" value="<?php echo $_GET["Area"]; ?>" name="Area" id="Area">
						<input class="form-control" type="hidden" value="<?php echo $_GET["Usuario"]; ?>" name="Usuario" id="Usuario">
						<input class="form-control" type="hidden" value="<?php echo $_GET["TipoCuentaUser"]; ?>" name="TipoCuentaUser" id="TipoCuentaUser">
					</div>

					<?php
						$Area = $_GET["Area"];
						if ($_GET["TipoCuentaUser"]=='admin'){
							$consulta = "SELECT * FROM proyectos";
						}else{
							$consulta = "SELECT * FROM proyectos";
						}
						//$consulta = "SELECT * FROM proyectos";
						$resultado = $connect->query($consulta);
						$fila = mysqli_fetch_assoc($resultado);
						$total = mysqli_num_rows($resultado);
					?>

					<div class="container col-sm-12">
						<div class="form-group row">
						<div class="col-sm-12"><br>
							<label for="ProyectosCdt"><strong>Tareas/Proyectos </strong>(Seleccione para editar).</label>
							<select style="background-color: #f7f9cb;" class="form-control" name="ProyectosCdtnpe" id="ProyectosCdtnpe" onchange="showPrjsEdit(this.value)">
								<option>Nuevo.</option>

							<?php if ($total>0) { ?>
										<h2>Resultados: <?php echo $total; ?></h2>
										<?php do { ?>
												<?php
													//$ProyectosCdt=$fila['Proyecto'];
													//$Ref_ProyectosCdt=$fila['Clave_Proyecto'];
												echo '<option>'.$fila['Proyecto'].'</option>';
												?>
										<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
							<?php }
							elseif ($total>0) echo '';
							else echo '<h2>No se encontraron resultados</p>';
							?>
							</select>
						</div>
					</div>
				</div>

				<div class="container col-sm-12">
					<div class="form-group row"><br>

						<div class="col-sm-8">
							<label for="Proyecto_Nuevo"><strong>Nueva tarea</strong></label>
							<input class="form-control" type="Text" maxlength="250" name="Proyecto_Nuevonpe" id="Proyecto_Nuevonpe">
						</div>

						<div class="col-sm-2">
							<label for="Clave_Proyecto">N&uacutemero de tarea</label>
							<input class="form-control" type="text" name="Clave_Proyectonpe" id="Clave_Proyectonpe">
						</div>

						<div class="col-sm-2">
							<label for="Tarea_Prioridad">Prioridad</label>
							<select class="form-control" name="Tarea_Prioridad" id="Tarea_Prioridad">
								<option>Normal</option>
								<option>Alta</option>
								<option>Urgente</option>
							</select>
						</div>



						</div>
					</div>



					<div class="container col-sm-12">
						<div class="form-group row">

							<div id="txtHintnpe"><b></b></div>

							<div class="col-sm-2">
								<label for="Estado_Actividad">Estado</label>
								<select class="form-control" name="Estado_Actividad" id="Estado_Actividad">
									<option>Abierta</option>
									<option>Cerrada</option>
								</select>
							</div>

										<div class="col-sm-2">
											<label for="FechaInicio_Proyecto">Fecha inicio</label>
											<input class="form-control" type="date" value="<?php echo date("Y-m-d");?>" name="FechaInicio_Proyectonpe" id="FechaInicio_Proyectonpe">
										</div>

										<div class="col-sm-2">
											<label for="FechaVencimiento1_Proyecto">Fecha vencimiento</label>
											<input class="form-control" type="date" value="<?php echo date('Y-m-d', strtotime('+5 day', strtotime(date("Y-m-d"))));?>" name="FechaVencimiento1_Proyectonpe" id="FechaVencimiento1_Proyectonpe">
										</div>

										<div class="col-sm-2">
											<label for="FechaVencimiento2_Proyecto">Fecha cierre</label>
											<input class="form-control" type="date" value="<?php echo date('Y-m-d', strtotime('+5 day', strtotime(date("Y-m-d"))));?>" name="FechaVencimiento2_Proyectonpe" id="FechaVencimiento2_Proyectonpe">
										</div>



										<div class="col-sm-4">
											<label for="Adjuntonpe">Adjuntar archivo</label>
											<input type="file" accept="application/pdf" class="form-control-file" name="Adjuntonpe" id="Adjuntonpe" aria-describedby="fileHelp">
										</div>

						</div>
					</div>

					<div class="container col-sm-12">
						<div class="form-group row"><br>

							<div class="col-sm-4">
								<label for="Responsable_Proyecto">Responsable</label>
								<input class="form-control" type="text" maxlength="50" name="Responsable_Proyectonpe" id="Responsable_Proyectonpe">
							</div>
							<div class="col-sm-2">
								<label for="Responsable_Proyecto">Area</label>
								<input class="form-control" type="text" maxlength="50" name="Responsable_Proyectonpe" id="Responsable_Proyectonpe">
							</div>
							<div class="col-sm-4">
								<label for="Colaborador_Proyecto">Colaborador</label>
								<input class="form-control" type="text" maxlength="50" name="Colaborador_Proyectonpe" id="Colaborador_Proyectonpe">
							</div>
							<div class="col-sm-2">
								<label for="Responsable_Proyecto">Area</label>
								<input class="form-control" type="text" maxlength="50" name="Responsable_Proyectonpe" id="Responsable_Proyectonpe">
							</div>

						</div>
					</div>

					<div class="container"><br>
							<p style="text-align:center;">
								<input class="btn btn-primary" type="submit" value="Guardar registro">
							</p>
					</div>
				</form>
			</div>
				<!--***********************************Fin Tab Nuevos Proyectos & Edit **************************************************************-->

		</div><!--Fin nav-tabContent-->

	</body>
</html>
