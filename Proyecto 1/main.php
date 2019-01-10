
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    
<center>   


<?php 
    $error = false;

    if (isset($_POST['name']) && $_POST['name'] != NULL){
    
        $name = $_POST['name'];
        if (!preg_match("/^[a-zA-Z\d]+$/", $name)){
            echo '<h2 style="color: red;"> Solo se admiten letras en el nombre</h2>';
            $error = true;     
        }
            else{
                echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu nombre '.$name.' se ha resgistrado correctamente.</div>';
            }
        }
            else{ 
                $error = true;      
                echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Nombre.</div>';
    }

    /*  */
    if (isset($_POST['surname1']) && $_POST['surname1'] != NULL){
    
        $surname1 = $_POST['surname1'];
        if (!preg_match("/^[a-zA-Z\d]+$/", $surname1)){
            echo '<h2 style="color: red;"> Solo se admiten letras en el Apellido 1</h2>'; 
            $error = true;       
        }
            else {
                 echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu primer apellido '.$surname1.' se ha resgistrado correctamente.</div>';
                 }
        }
            else{
                $error = true;    
                 echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Primer Apellido.</div>';
    }
    /* */

    if (isset($_POST['surname2']) && $_POST['surname2'] != NULL){

        $surname2 = $_POST['surname2'];
        if (!preg_match("/^[a-zA-Z\d]+$/", $surname2)){
            echo '<h2 style="color: red;"> Solo se admiten letras en el Apellido 2</h2>';    
            $error = true;    
        }
            else{
                echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu segundo apellido '.$surname2.' se ha resgistrado correctamente.</div>';
                }
        }   
            else{
                $error = true;    
                 echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Segundo Apellido.</div>';
    }
    /* */

   
    if (isset($_POST['email']) && $_POST['email'] != NULL){
        
        $email = $_POST['email'];
        if (!preg_match("/^[a-zA-Z0-9]*[@][a-zA-Z]*[.][a-z]*$/", $email)){
            echo '<h2 style="color: red;"> Solo se admiten letras en el Apellido 2</h2>';    
            $error = true;    
        }
            else{
        echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu Email '.$email.' se ha resgistrado correctamente.</div>';
                }
        }
            else{
                $error = true;    
        echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Email.</div>';
    }

    /* */

      if (isset($_POST['dni']) && $_POST['dni'] != NULL){

        $dni = $_POST['dni'];
        if (!preg_match("/^[0-9]{8}[a-zA-Z]$/", $dni)){
            echo '<h2 style="color: red;"> Solo se admiten 8 numeros y una letra</h2>'; 
            $error = true;           
        }
            else{
                echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu DNI '.$dni.' se ha resgistrado correctamente.</div>';
                }
        }        
            else{
                $error = true;    
                echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu DNI.</div>';
    }
    /* */

    if (isset($_POST['phone']) && $_POST['phone'] != NULL){
        
        $phone = $_POST['phone'];
        if (!preg_match("/^[0-9]{9}+$/", $phone)){
            echo '<h2 style="color: red;"> Solo se admiten 9 numeros</h2>';    
            $error = true;        
        }
            else{
                echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu numero de Teléfono '.$phone.' se ha resgistrado correctamente.</div>';
                }
        }        
            else{
                $error = true;    
                 echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Teléfono.</div>';
    }
    /* */

    $city = $_POST['city'];
    if (isset($_POST['city']) && $_POST['city'] != NULL){
        echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu Población '.$city.' se ha resgistrado correctamente.</div>';
    }
    else{
        $error = true;    
        echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Población.</div>';
    }
    /* */
    $street = $_POST['street'];
    if (isset($_POST['street']) && $_POST['street'] != NULL){
        echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu Calle '.$street.' se ha resgistrado correctamente.</div>';
    }
    else{
        $error = true;    
        echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Calle.</div>';
    }
    /* */
    $number = $_POST['number'];
    if (isset($_POST['number']) && $_POST['number'] != NULL){
        echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu Número '.$number.' se ha resgistrado correctamente.</div>';
    }
    else{
        $error = true;    
        echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Número.</div>';
    }
    /* */
    $floor = $_POST['floor'];
    if (isset($_POST['floor']) && $_POST['floor'] != NULL){
        echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu Planta'.$floor.' se ha resgistrado correctamente.</div>';
    }
    else{
        $error = true;    
        echo '<div class="alert alert-danger"><strong>ERROR!</strong> No has escrito tu Planta.</div>';
    }
    
    if ($error){
        echo '<a class="btn btn-danger btn-lg" href=index.php>VOLVER</a>';

    }
    else {
        echo '<div class="alert alert-success"><strong>CORRECTO!</strong> Tu información se ha guardado correctamente.</div>';
    }
    

?>

</center>



</body>