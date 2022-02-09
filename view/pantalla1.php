<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Recogida de datos del formulario</h1>
    <?php
        session_start();
        if($_SESSION['pantalla1']!='check'){
            header('Location: ../index.php?');
        }
        if(isset($_GET['msg'])){
            echo'<p>Intenta con el pokemon #'.$_GET['msg'].'</p>';     
        }
    ?>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="pokemon2" placeholder="Inserte otro pokemon...">
        <input type="submit">
    </form>
</body>
</html>