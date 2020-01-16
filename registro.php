<?php  session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Usuario = limpiarDatos($_POST['Usuario']);
    $Pwd = limpiarDatos($_POST['Pwd']);
    $TipoCuenta = $_POST['TipoCuenta'];

    $errores = '';

    // validar los campos de texto
    if (empty($Usuario) || empty($Pwd) || empty($TipoCuenta)) {
        $errores .= '<li class="error">Por favor rellene todos los campos</li>';
    }else{
        // validacion de que el usuario no exista
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE Usuario = :Usuario LIMIT 1');
        $statement->execute([
            ':Usuario' => $Usuario
        ]);
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li class="error">Este usuario ya existe</li>';
        }
    }

    if($errores == ''){
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('INSERT INTO `usuarios` (`IdUsuario`, `Usuario`, `Pwd`, `TipoCuenta`) VALUES (null, :Usuario, :Pwd, :TipoCuenta)');
        $statement->execute([
            ':Usuario' => $Usuario,
            ':Pwd' => $Pwd,
            ':TipoCuenta' => $TipoCuenta
        ]);

        header('Location: '.RUTA.'registro.php');

    }
}

require 'crud_us.php';

?>
