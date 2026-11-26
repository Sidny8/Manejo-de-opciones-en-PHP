<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>AGENCIA DE VIAJES</h1>
    <form action="resultados.php" method="POST">
        <div class="tit">
            <div class="col-i">
                 <h2>Destinos turísticos</h2>
                <select id="destino" name="destino[]" style="overflow-y: hidden;" multiple>
                    <option value="Cancun">Cancún</option>
                    <option value="Puerto Vallarta">Puerto Vallarta</option>
                    <option value="Acapulco">Acapulco</option>
                    <option value="Los Cabos">Los Cabos</option>                  
                    <option value="Mazatlán">Mazatlán</option>
                    <option value="Huatulco">Huatulco</option>
                    <option value="Puerto Escondido">Puerto Escondido</option>
                </select>
            </div>
            <div class="col-c">
                <h2>Actividades turísticas</h2>
                <div class="col">
                    <label for="opcion-1">
                        <input type="checkbox" value="Buceo" id="opcion-1" name="act[]">Buceo en el mar
                    </label>
                    <label for="opcion-2">
                        <input type="checkbox" value="Paseo en lancha" id="opcion-2" name="act[]">Paseo en lancha
                    </label>
                    <label for="opcion-3">
                        <input type="checkbox" value="Visita a zonas arqueológicas" id="opcion-3" name="act[]">Ir a zonas arqueológicas
                    </label>
                    <label for="opcion-4">
                        <input type="checkbox" value="Senderismo" id="opcion-4" name="act[]">Senderismo
                    </label>
                    <label for="opcion-5">
                        <input type="checkbox" value="Pesca deportiva" id="opcion-5" name="act[]">Pesca deportiva
                    </label>
                    <label for="opcion-6">
                        <input type="checkbox" value="Recorrido gastronómico" id="opcion-5" name="act[]">Recorrido gastronómico
                    </label>
                    <label for="opcion-7">
                        <input type="checkbox" value="Visita a museos" id="opcion-5" name="act[]">Ir a museos
                    </label>
                </div>
            </div>
                <div class="col-d">
                    <h2>Servicios adicionales</h2>
                    <div class="col">
                        <label for="opcion-8">
                            <input type="checkbox" value="Transporte privado" id="opcion-8" name="sva[]">Transporte privado
                        </label>
                        <label for="opcion-9">
                            <input type="checkbox" value="Desayuno incluido" id="opcion-9" name="sva[]">Desayuno incluido
                        </label>
                        <label for="opcion-10">
                            <input type="checkbox" value="Hospedaje de lujo" id="opcion-10" name="sva[]">Hospedaje de lujo
                        </label>
                        <label for="opcion-11">
                            <input type="checkbox" value="Seguro de viajero" id="opcion-11" name="sva[]">Seguridad al viajero
                        </label>
                        <label for="opcion-12">
                            <input type="checkbox" value="Atencion rapida" id="opcion-12" name="sva[]">Atencion rapida
                        </label>
                        <label for="opcion-13">
                            <input type="checkbox" value="Guía turístico" id="opcion-13" name="sva[]">Guía para turista
                        </label>
                </div>
            </div>
            <div class="cX">
                <h2>Datos del cliente</h2>
                <div class="sono">
                    <label for="nom">Nombre completo:</label>
                    <input type="text" id="nom" name="nom" required><br><br>
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                    <br><br><br><br><br><br><br><br><br><br>
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>