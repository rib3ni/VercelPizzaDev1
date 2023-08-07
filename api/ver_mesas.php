<?php
require "menu.php";
?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ver_mesas1.css"/>
    </head>
    <body>    



<formulario class="form">
    <div class="topo">

    <h1>Editar Mesas<br></h1>

    </div>
<?php
    if(isset($_SESSION['user_id'])){
          
       if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") { 
            echo '<h5>Erro!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5>Excluido com sucesso</h5>';
        }
    }          
   require 'ver_mesas_inc.php';   
}   
    else {
        echo '	<p><br>Você não tem permissão!<br><br></p>';  
    }
?>



</formulario>

</body>
</html>