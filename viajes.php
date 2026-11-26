<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AGENCIA DE VIAJES</h1>
    <form action="resultados.php" method="POST">
        <h2><label for="asignatura">Destinos turísticos</label></h2>
        <select id="destino" name="destino[]" multiple>
            <option value="Cancun">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlán">Mazatlán</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select>
        <h2>Actividades turísticas</h2>
        <label for="opcion-1">
            <input type="checkbox" value="CBTIS 217" id="opcion-1" name="prepas[]">CBTIS_217
        </label>
        <label for="opcion-2"><br><br>
            <input type="checkbox" value="CEYTEC" id="opcion-2" name="prepas[]">CEYTEC
        </label>
        <label for="opcion-3"><br><br>
            <input type="checkbox" value="PREPA DEL SUR" id="opcion-3" name="prepas[]">PREPA DEL SUR
        </label>
        <label for="opcion-4"><br><br>
            <input type="checkbox" value="PREPA UG" id="opcion-4" name="prepas[]">PREPA UG
        </label>
        <label for="opcion-5"><br><br>
            <input type="checkbox" value="CONALEP" id="opcion-5" name="prepas[]">CONALEP
        </label><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>