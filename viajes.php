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
            <input type="checkbox" value="Buceo" id="opcion-1" name="act[]">Buceo
        </label>
        <label for="opcion-2"><br><br>
            <input type="checkbox" value="Paseo en lancha" id="opcion-2" name="act[]">Paseo en lancha
        </label>
        <label for="opcion-3"><br><br>
            <input type="checkbox" value="Visita a zonas arqueológicas" id="opcion-3" name="act[]">Visita a zonas arqueológicas
        </label>
        <label for="opcion-4"><br><br>
            <input type="checkbox" value="Senderismo" id="opcion-4" name="act[]">Senderismo
        </label>
        <label for="opcion-5"><br><br>
            <input type="checkbox" value="Pesca deportiva" id="opcion-5" name="act[]">Pesca deportiva
        </label>
        <label for="opcion-6"><br><br>
            <input type="checkbox" value="Recorrido gastronómico" id="opcion-5" name="act[]">Recorrido gastronómico
        </label>
        <label for="opcion-7"><br><br>
            <input type="checkbox" value="Visita a museos" id="opcion-5" name="act[]">Visita a museos
        </label><br><br>

        <h2>Servicios adicionales</h2>
        <label for="opcion-8">
            <input type="checkbox" value="Transporte al aeropuerto" id="opcion-8" name="sva[]">Transporte al aeropuerto
        </label><br><br>
        <label for="opcion-9">
            <input type="checkbox" value="Desayuno incluido" id="opcion-9" name="sva[]">Desayuno incluido
        </label>
        <br><br>
        <label for="opcion-10">
            <input type="checkbox" value="Hospedaje de lujo" id="opcion-10" name="sva[]">Hospedaje de lujo
        </label>
        <br><br>
        <label for="opcion-11">
            <input type="checkbox" value="Seguro de viajero" id="opcion-11" name="sva[]">Seguro de viajero
        </label>
        <br><br>
        <label for="opcion-12">
            <input type="checkbox" value="Renta de automóvil" id="opcion-12" name="sva[]">Renta de automóvil
        </label>
        <br><br>
        <label for="opcion-13">
            <input type="checkbox" value="Guía turístico" id="opcion-13" name="sva[]">Guía turístico
        </label>
        <br><br>
        <h2>Datos del cliente</h2>
        <label for="nom">Nombre completo:</label>
        <input type="text" id="nom" name="nom" required />
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>