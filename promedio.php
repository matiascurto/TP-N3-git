<?php 

$num1 = $_POST['Numero1'];
$num2 = $_POST['Numero2'];
$num3 = $_POST['Numero3'];
$num4 = $_POST['Numero4'];
$num5 = $_POST['Numero5'];
$num6 = $_POST['Numero6'];
$num7 = $_POST['Numero7'];
$num8 = $_POST['Numero8'];

  $promedio = ($num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8) /8;  
 
  if ($promedio <= 1000) {
    echo "El promedio de sueldo es: " .$promedio. " <br> Rango de sueldo BAJO";
} elseif ($promedio  <= 3000) {
  echo "El promedio de sueldo es: " .$promedio. "  <br> Rango de sueldo MEDIO";
} else {
  echo "El promedio de sueldo es: " .$promedio. " <br> Rango de sueldo ALTO";
}

?>