<?php 

$num1 = $_POST['Numero1'];
$num2 = $_POST['Numero2'];
$num3 = $_POST['Numero3'];
$num4 = $_POST['Numero4'];
$num5 = $_POST['Numero5'];


  $promedio = ($num1+$num2+$num3+$num4+$num5) /5;  
 
  if ($promedio <= 1000) {
    echo "El promedio de sueldo es: " .$promedio. " <br> Rango de sueldo BAJO";
} elseif ($promedio  <= 3000) {
  echo "El promedio de sueldo es: " .$promedio. "  <br> Rango de sueldo MEDIO";
} else {
  echo "El promedio de sueldo es: " .$promedio. " <br> Rango de sueldo ALTO";
}

?>