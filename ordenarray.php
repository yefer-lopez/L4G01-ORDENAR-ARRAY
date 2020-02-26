<!DOCTYPE html>
<head>
<h2>METODO DE ORDENAMIENTO</h2>
</head>
<body>
<h3>METODO BURBUJA</h3>
</body>
</html>

<?php
//ORDENAMIENTO
function burbuja($array)
{
    for($i=1;$i<count($array);$i++)
    {
        for($j=0;$j<count($array)-$i;$j++)
        {
            if($array[$j]>$array[$j+1])
            {
                $k=$array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$k;
            }
        }
    }
 
    return $array;
}
 
$ingreso=array(55,9,4,7,3,8,2,1,6);
 
echo "VALORES DESORDENADOS<br>";
for($i=0;$i<count($ingreso);$i++)
    echo $ingreso[$i]."\n";
 
$salida=burbuja($ingreso);
 
echo "<br><br>VALORES ORDENADOS<br>";
for($i=0;$i<count($salida);$i++)
    echo $salida[$i]."\n";
?>