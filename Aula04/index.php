
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity" id="quantity"><br>
        <input type="text" name="quantity" id="quantity"><br>

        <input type="submit" value="Total">
    </form>
    </body>
</html>

<?php
 $item = "pizza";
 $price = 5.99;
 $quantity = $_POST["quantity"];
 $total = null;

 $total = $quantity * $price;

 echo"You have ordered {$quantity} x {$item}/s";
 echo"You total is \${$total}";

?>