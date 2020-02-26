<h!DOCTYPE html>
<head>
</head>
<body>
<h5>hola mundo</h5>
<h2>vienvenidos al primer dia de php </h2>
</body>
</html>

<?php
$nombre="yili lopez";
echo $nombre;
$dias=["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];
echo $dias[0];
var_dump($dias);//imprime una cadena
echo count($dias);//cuenta los elementos
echo "<br>";//se utiliza para dar un salto de linia
for($i=0; $i<count($dias);$i++){//ciclo
    echo $dias[$i]."<br>";
    echo"dia $i:".$dias[$i];
}
//concatenar .
/*7
6
5
4
3
2
organizar los numeros 
*/

?>