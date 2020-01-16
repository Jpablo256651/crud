<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro de actividades</title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

    <script type="text/javascript">
        function on_callPhp()
        {
          var result="<?php php_func();?>";
          alert(result);
            alert();
          return false;
        }

    </script>
  <form class="" action="" method="post">
    <input type="button" name="" value="push" onclick="on_callPhp()"/>
<br>
    <div class="container fluid row">
      <div class="col-sm-6"><br>
        <label for="FolioCdt_entradas">Responsable</label>
        <input class="form-control" type="text" name="Responsable" id="Responsable">
      </div>
      <div class="col-sm-6"><br>
        <label for="FolioCdt_entradas">Colaborador</label>
        <input class="form-control" type="text" name="Colaborador" id="Colaborador">
      </div>
    </div>

  </form>

  <?php
    function php_func()
    {
      echo "Hello PHP 111";
    }

   ?>

  </body>
</html>
