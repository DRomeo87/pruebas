<html>
<head>
</head>
<body>
<?php
srand((double)microtime()*1000000);
$Numero = rand(1,10);
if ($adivina > $Numero){
    echo "Grande"; echo "<br>Yo pensé el número $Numero. Lo siento.";
}
if ($adivina < $Numero){
    echo "Pequeño"; echo "<br>Yo pensé el número $Numero. Lo siento.";
}
?>
GANASTE
</body>
</html>