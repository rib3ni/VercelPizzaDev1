<?php


require "menu.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editarmesas1.css" />
    <title>Editar Mesas</title>
</head>
<body>


<section class="form-container">
    
        <h1>Editar Mesas</h1>
    
                           
<?php if(isset($_SESSION['user_id'])){
    if($_SESSION['role']==2){
        
        echo '<p class="sub-tit">Defina o número máximo de mesas para uma data</p>';

        if(isset($_GET['error4'])){
        if($_GET['error4'] == "sqlerror1") {   
            echo '<h5>Erro</h5>';
        }
        if($_GET['error4'] == "emptyfields") {  
            echo '<h5>Erro, campos vazios</h5>';
        }
        }
        if(isset($_GET['tables'])){
        if($_GET['tables'] == "success") {   
            echo '<h5>Alteração foi concluida com sucesso</h5>';
        }
        }
        echo'
                                                 

        <form action="editar_mesas_inc.php" method="post">
            
            <div class="form-group">  
            <input type="date" class="form-control" name="date_tables" placeholder="Date">
            <hr>
            </div>

            <div class="num_label">
            <label>Insira o número de mesas:</label>
            </div>

            <div class="input_num">    
            <div class="wrapper">
            <input type="number" min="0" max="100" step="1" value="01" id="my-input" name="num_tables">
            </div>
            </div>

            <div class="form-group">
            <br><br> <button type="submit" name="tables" class="btn">Submeter Mesas</button>
            </div>
        
        
            </form>
        <br>

</div>
</section>
';
        
    }
}                
    else {
        echo '  <p class="text-center"><br>Você não tem permissão!<br><br></p>';          
    }      
?>
    

</body>
</html>
