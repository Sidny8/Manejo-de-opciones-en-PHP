<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>RESUMEN DEL REGISTRO</h1>
    <div class="cnD">
        <?php
        $nam=$_POST['nom'];
        echo"<h3>Datos del usuario</h3>";
        echo "Nombre de usuario: ".$nam."<br>";
        $cor=$_POST['correo'];
        echo "Correo de cliente: ".$cor;
        
        echo "<h3>Destinos seleccionados: </h3>";
        $con1=0;
        $cd=0;
        $ca=0;
        $cs=0;

        $des=$_POST['destino'] ?? [];
        if (empty($des)) {
            echo "No se seleccionó nada.<br>";
        }else {
            foreach($des as $as){
                echo "*".$as . "<br>";
                $con1++;
                $cd++;
            }
        }

        echo "<h3>Actividades seleccionadas: </h3>";
        $act=$_POST['act'] ?? [];
        if (empty($act)) {
            echo "No se seleccionó nada.<br>";
        }else {
            foreach($act as $as){
                echo $as . "<br>";
                $con1++;
                $ca++;
            }
        }
        echo "<h3>Servicios Adicionales Seleccionados: </h3>";
        $s=$_POST['sva'] ?? [];
        if (empty($s)) {
            echo "No se seleccionó nada.<br>";
        }else {
            foreach($s as $as){
                echo $as . "<br>";
                $con1++;
                $cs++;
            }
        }
        echo"<br>Cantidad de destinos deseados: ".$cd."<br>";
        echo"Cantidad de actividades deseadas: ".$ca."<br>";
        echo"Cantidad de Servicios Adicionales: ".$cs."<br>";
        echo "Cantidad de seleccionados: ".$con1."<br>";
        ?>
    </div>
    <img src="viaje.jpg" alt="">
</body>
</html>
</body>
</html>