<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>
<body>
    <h1>Recogida de datos del formulario</h1>
    <?php
    /*Comentar codigo en php*/
    echo '<p>'.$_REQUEST['nombre'].'</p>';
    echo $_REQUEST['pwd'];
    ?>
</body>
</html>