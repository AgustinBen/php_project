<!DOCTYPE html>
<html>
<head>
    <title>Nueva Página</title>
</head>
<body>
    <h1>Hola, esta es mi nueva página</h1>
    <?php

    $dia = date('d');
    
    if($dia < 10){

        echo "Pagina activa";

    }else{
        echo "Pagina desactivada en esta fecha";
    }
    ?>
</body>
</html>
