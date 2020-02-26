<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //condicional if
    $edad=20;
    if($edad>18){
        echo "mayor de edad";

    }else{
        echo "menor de edad";
    }
    //------------------
    echo "<br>";
    echo $edad>18?"mayor":"menor";//operador terniario
    echo "<br>";
    echo $edad??"la edad no esta";
    ?>
    
</body>
</html>