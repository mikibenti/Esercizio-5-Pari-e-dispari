<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 4;
        $tipoNum = "";
        if ($num % 2 == 0) {
            $tipoNum = "pari";
        } else {
            $tipoNum = "dispari";
        }
        echo "<p>Il numero $num è $tipoNum</p>"
    ?>
</body>
</html>