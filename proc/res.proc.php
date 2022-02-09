<?php
if(strtolower($_POST['pokemon'])=='pikachu'){
    //Creamos la sesión.
    session_start();
    $_SESSION['pantalla1']='check';
    //echo "El resultado es: {$pokemon}"; 
    header('Location: ../view/pantalla1.php');

}
else{
    //echo "Nombre del pokemon incorrecto";
    header('Location: ../index.php?msg=25');
}
if(strtolower($_POST['pokemon2'])=='bulbasaur'){
    session_start();
    $_SESSION['pantalla2']='check';
    header('Location: ../view/pantalla2.php');
}
else if(isset($_POST['pokemon2'])){
    header('Location: ../view/pantalla1.php?msg=1');
}
