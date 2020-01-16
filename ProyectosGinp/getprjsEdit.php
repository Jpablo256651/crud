<?php require_once('conn/connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
    display: none;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
  <?php
  function st($str) {
    $ca= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
    $sa= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
    $str = str_replace($ca, $sa ,$str);
    return $str;
  }
  ?>
<?php
$q = $_GET['q'];

//$query = "SELECT * FROM proyectos WHERE Proyecto='".$q."'";
$query = "SELECT * FROM proyectos WHERE Proyecto LIKE '".substr(st($q),0,250)."%'";
//LIKE '%" . st($qs[$i]) . "%'";
//echo $query;
$resultados=$connect->query($query);
$fila = mysqli_fetch_assoc($resultados);


echo "<table id='tableprjsEdit'>
<tr>
<th>ColH</th>
</tr>";
    echo "<tr>";
    echo "<td>".utf8_encode($fila["Proyecto"])."</td>";
    echo "<td>".utf8_encode($fila["Clave_Proyecto"])."</td>";
    echo "<td>".utf8_encode($fila["Tipo"])."</td>";
    echo "<td>".utf8_encode($fila["Responsable"])."</td>";
    echo "<td>".utf8_encode($fila["Colaborador"])."</td>";
    echo "<td>".$fila["FechaInicio"]."</td>";
    echo "<td>".$fila["FechaVencimiento1"]."</td>";
    echo "<td>".$fila["FechaVencimiento2"]."</td>";
    echo "<td>".($fila["ANALISIS"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["DIFUSION"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["LEDA"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["INFORMATICA"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["IDP"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["DISA"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["TETRA"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["TELEMANDO"] == 'SI' ? 'true' : '')."</td>";
    echo "<td>".($fila["MEJORA"] == 'SI' ? 'true' : '')."</td>";
    echo "</tr>";
echo "</table>";
mysqli_close($connect);
?>
</body>
</html>
