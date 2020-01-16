<html>
<head>
</head>
<table border="0" cellpadding="0" cellspacing="0" width=100%>
<td width = "10%" valign="center" align="center"><p>Product</p></td>
<td width = "10%" valign="top" align="center">
<?php



if(isset($_POST['product'])) {
    echo "tiene producto";
    $item = $_GET["product"];
}else{
  echo "no tiene producto";
  $item = 1;
}



?>
<select onChange="window.location='ban.php?product='+this.value" >
<?php
$product = array(
	"",
	"PC",
	"Scanner",
	"Printer",
	"Monitor");
for ($i = 1; $i <= 4; $i++)
{
?>
<option value="<?=$i?>" <? if ($item == $i) { print "SELECTED";}?>> <?=$product[$i]?></option>
<?php
}
?>
</select>
</td>
<td width= "50" valign="middle"><img src = "<?=$item?>.gif" width="32" height="20">
</td>
</tr>
</table>
<hr>
</html>
