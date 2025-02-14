<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div style="text-align:center">
        <img src="logo.png" width="100">
        <h1>{{ env('APP_NAME') }}</h1>
        <img src="brasil.png" width="40%" onclick="enviar()">
    </div>
    <div style="border:3px solid red;text-align:center;" id="resposta">Clique no mapa para retornar as cooordenadas geográficas</div>
    <script>
        function enviar() {
            $.get('./mapa?modulo=mapa_paises&id=BR')
                .then(function (response) {
                    $(resposta).html('Coordenadas do Brasil <hr>'+response);
            });
        }
    </script>

</body>
</html>
