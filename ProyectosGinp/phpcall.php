<?php require_once('conn/connect.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>
        How to call PHP function
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Registro de actividades</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="text-align:center;">
    <form method="">

      <?php
        $consulta = "SELECT * FROM proyectos";
        $resultado = $connect->query($consulta);
        $fila = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
      ?>

      <div class="col-sm-10"><br>
        <label for="ProyectosCdt">Proyecto</label>
        <select class="form-control" id="Proyecto" onchange="OnSelect()">
        <?php if ($total>0) { ?>
              <h2>Resultados: <?php echo $total; ?></h2>
              <?php do { ?>
                  <?php
                    $ProyectosCdt=$fila['Proyecto'];
                    echo '<option>'.utf8_encode($ProyectosCdt).'</option>';
                  ?>
              <?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
        <?php }
        elseif ($total>0) echo '';
        else echo '<h2>No se encontraron resultados</p>';
        ?>
        </select>
      </div>

      <div class="container fluid row">
        <div class="col-sm-6"><br>
          <label for="Responsable">Responsable</label>
          <input type="text" name="Responsable" id="Responsable">
        </div>
        <div class="col-sm-6"><br>
          <label for="Responsable">Responsable</label>
          <input type="text" name="Responsable" id="Responsable">
        </div>
      </div>

      <script>
      function OnSelect() {
        var x = document.getElementById("Proyecto").value;
        document.getElementById("Responsable").value = "Resp: "+x;
        //************************
        var result="<?php php_func();?>";
        alert(result);
        return false;
        //**********************
      }
      </script>

      <?php
        function php_func()
        {
          echo "hola mundo";
        }

       ?>



    </form>
</head>
</html>
