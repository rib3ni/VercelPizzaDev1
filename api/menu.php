

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Restaurante Pereira</title>
</head>

<body>
<header id="header">
      <nav class="container">
        <a class="logo" href="menu.php">Restaurante<span> Pereira</span></a>
        <div class="menu">
          <ul class="grid">
              <?php 
              session_start();
              if(isset($_SESSION['user_id'])){ 
                
                echo '
                <li><a class="title" href="reservation.php">Criar Reserva</a></li>
                <li><a class="title" href="ver_reservas.php">Ver Reservas</a></li>
                ';
                
                
                if($_SESSION['role']==2) {   
                    echo'
                   
                    <li><a class="title" href="editar_mesas.php">Editar Mesas</a></li>
                    <li><a class="title" href="ver_mesas.php">Ver Mesas</a></li>
                    <li><a class="title" href="logout.php">Log out</a>';
                }
                else {

                  echo '<li><a class="title" href="logout.php">Log out</a>';

                }              
                }
                else {
                    
                    echo'
                    
                    <li><a class="title" href="logout.php">Log out</a>';

                }
              
              ?>
          
          </ul>
        </div>
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>
    <?php
    



    if (strpos($_SERVER['REQUEST_URI'], "menu") !== false){
      

        echo'
   <!-- Menu Logado -->
   <section class="principal" id="home">
        <h2>Painel de Controlo</h2>
         
        <div class="links">
            <a href="">Reserve já!</a>
          </div>
      </section>';
    }
    
        ?>
   


</body>
</html>