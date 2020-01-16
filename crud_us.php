<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Registro de Uusuarios</title>
</head>
<body class="bg-image">
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <h1 class="text-center">Registro de Usuarios</h1>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
      <div class="input-group">
        <i class="fa fa-user-o icons" aria-hidden="false"></i>
        <input type="text" name="Usuario" placeholder="Usuario" class="form-control">
      </div>

      <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type="password" name="Pwd" placeholder="Contraseña" class="form-control">
      </div>

      <div class="input-group">
        <select name="TipoCuenta" size="1" class="form-control">
          <option value="">Selecciona un privilegio</option>
          <option value="admin">admin</option>
          <option value="user">user</option>
        </select>
      </div>

      <?php if (!empty($errores)): ?>
        <ul>
          <?php echo $errores; ?>
        </ul>
      <?php endif; ?>
  <button type="submit" name="submit" class="btn btn-flat-green">Registrar</button>
    </form>
  </div>
</body>
</html>
