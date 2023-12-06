<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
   <link rel="stylesheet" href="style.css">
    <title>Relogio</title>
</head>

<body>






    <?php
    date_default_timezone_set("America/Sao_Paulo"); //horario BR
    $hora = date("G:I:s"); //pegando hora

    $h = "<h1>$hora</h1>";
    

  //function aparecer hora
    function Hora($h)
    {

        echo  $h;
    }




    Hora($hora);





















    ?>





</body>

</html>