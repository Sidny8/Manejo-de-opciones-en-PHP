<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Opciones elegidas: <br>";
    $materias=$_POST['destino'] ?? [];
    foreach($materias as $as){
        echo $as . "<br>";
    }
    echo "<br>Opciones elegidas: <br>";
    $prepa=$_POST['prepas'] ?? [];
    foreach($prepa as $as){
        echo $as . "<br>";
    }
    ?>
</body>
</html>
</body>
</html>