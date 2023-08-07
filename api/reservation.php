<?php
require "menu.php";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="reservas.css"/>
        <script src="script.js"></script>

    </head>
    <body>      
<br><br>
<br><br>
<br><br>

<section class="form-container">
        <div class="container">
            <h1>Nova Reserva</h1>   
 
         
    
<?php
if(isset($_SESSION['user_id'])){
    echo '<p>Bem-vindo '. $_SESSION['username'] .', cria a tua reserva aqui!</p>';
      
  //error handling:
    
    if(isset($_GET['error3'])){
        if($_GET['error3'] == "emptyfields") {  
            echo '<h5>Fill all fields, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidfname") {   
            echo '<h5>Invalid First Name, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidlname") {   
            echo '<h5>Invalid Last Name, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidtele") {   
            echo '<h5>Invalid Telephone, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidcomment") {   
            echo '<h5>Invalid Comment, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidguests") {   
            echo '<h5>Invalid Guests, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "full") {   
            echo '<h5>Reservations are full this date and timezone, Please try again!</h5>';
        }
    }
        if(isset($_GET['reservation'])) {   
           if($_GET['reservation'] == "success"){ 
            echo '<h5 class="bg-success text-center">Reserva criada com sucesso!</h5>';
        }
        }
        echo'<br>';



    

    
    
     //reservation form  
    echo '  
        
        
        <form action="reservation.inc.php" method="post">

            <div class="form-group_input">
            <input type="text" class="input" name="fname" id="fnome-box" autocomplete="off" required>
            <label for="fnome-box"> Primeiro Nome</label>
            </div>

            <div class="form-group_input">
            <input type="text" class="input" name="lname" id="lnome-box" autocomplete="off" required>
            <label for="lnome-box">Último Nome</label>
            </div>   

            <div class="form-group">
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            <hr>
            </div>
            
		    <br>

            <div class="form-control_select">
		    <select  id="format" name="time">
            <option selected disable>Escolha um horário </option> 
		    <option>12:00 - 14:00</option>
		    <option>18:00 - 20:00</option>
		    <option>20:00 - 23:00</option>
		    </select>
            
            </div>
            <hr>
            
    
            <div class="num_label">
            <label>Insira o número de convidados:</label>
            </div>
   

            <div class="input_num">    
            <div class="wrapper">
            <input type="number" min="0" max="100" step="1" value="01" id="my-input" name="num_guests">
            </div>
            </div>
    
            <div class="form-group_input">
            <input type="telephone" class="input" name="tele" id="tel-box" autocomplete="off" required>
            <label for="tel-box">Insira o número de telefone</label><br>
            </div>

            <div class="textareal">
            <label>Inserir comentário extra</label><br>
            </div>
            <textarea class="textarea" name="comments" placeholder="Comentário"></textarea>
           

            <div class="form-group">
		    <br>
            <label class="checkbox-inline"><input type="checkbox" required="required"> Eu aceito os <a href="#">Termos de Uso</a> &amp; <a href="#">Politica Privada</a></label>
            </div>
            
            <div class="form-group">
            <br>
            <button type="submit" name="reserv-submit" class="btn">Submeter Reserva</button>
            </div>
            </form>
            <br><br>
        </section>
        </div>
    
    ';  
    }

    else {
        echo '	<p><br>Você não está logado!<br></p>
       <p>Para utilizar esta parte do site você tem que criar uma conta!<br><br><p>';  
        
    }
    ?>
</div>
</div>
</body>
</html>
