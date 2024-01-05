
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
       <label>x: </label>
       <input type="text" name="x">
       <label>y: </label>
       <input type="text" name="y">
       <label>z: </label>
       <input type="text" name="z">
       <input type="submit" value="total">
    </form>
    </body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;


    //Valor absoluto (se é negativo, fica positivo)
    $total = abs($x);

    //arredonda o número
    $total = round($x);
    //arredonda o número para baixo
    $total = floor($x);
    //arredonda o número para cima
    $total = ceil($x);

    //potencialização
    $total = pow($x, $y);
    //raiz quadrada
    $total = sqrt($x);

    //retorna o maior valor
    $total = max($x, $y, $z);
    //retorna o menor valor 
    $total = min($x, $y, $z);

    //retorna PI
    $total = pi();

    //retorna um número aleatório
    $total = rand();
    //retorna um número aleatório com min e max
    $total = rand(1, 100);

    echo $total
?>