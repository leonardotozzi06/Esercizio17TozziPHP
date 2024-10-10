<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $num = rand(10, 20);
    $lista = range(0, $num);
    $colori = ["red", "blue", "green", "yellow", "purple"];

    sort($lista);

    echo "<ol>";
    foreach ($lista as $elem) {
        $color = $colori[array_rand($colori)];
        echo "<li style='color:{$color}'>{$elem}</li>";
    }
    echo "</ol>";
    ?>

</body>
</html>