<?php
require 'menu.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ver_reservas1.css" />
</head>
<body>
    

<section class="form-container">
    <div class="texto">
    <h1><cor>Ver Reservas</cor></h1>     

<?php

    if(isset($_SESSION['user_id'])){
        echo '<p class="text-white bg-dark text-center"><estilo1>'. $_SESSION['username'] .', aqui você pode ver as reservas feitas</estilo1></p><br>';
        
    
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {   
            echo '<h5>Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5>Excluido com sucesso!</h5>';
        }
    }  
    require 'ver_reservas_inc.php';
    
 }
    else {
        echo '	<p class="text-center text-danger"><br>Você está não logado !<br></p>
       <p class="text-center">Para utilizar esta parte do site você tem que criar uma conta!<br><br><p>';   
    }       
?>

</div>
</section>
</body>
</html>