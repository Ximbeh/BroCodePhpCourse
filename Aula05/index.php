<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora de de uma circuferência.</h1>
    <form action="index.php" method="post">
        <label>radius</label>
        <input type="text" name="radius">

        <input type="submit" value="Calculate!">

    </form>
    <br>
</body>
</html>

<?php 
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    //aqui ele arredonda até a segunda (2) casa decimal
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo"Circuferencia = {$circumference}cm <br>";
    echo"Área = {$area}cm^2 <br>";
    echo"Volúme = {$volume}cm^3 <br>";



?>