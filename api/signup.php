<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Registro</title>
</head>

<body>


    <form class="form" action="signup.inc.php" method="post">
        <div class="card">   
            <div class="top">
                <img class="imagelogin" src="images/login.png" alt="" width="85" height="85">
                <h2 class="tittle">Registro</h2>
                
            </div>
            

            <div class="field">
                <label for="">Email</label>
                <input type="email" name="mail" required>
            </div>

            <div class="field">
                <label for="">Utilizador</label>
                <input type="text" name="uid" placeholder="Você precisa ter de 5 a 10 caracteres" required>
            </div>

            <div class="field">
                <label for="">Palavra-passe</label>
                <input type="password" name="pwd" placeholder="Você precisa ter de 6 a 15 caracteres" required>
            </div>

            <div class="field">
                <label for="">Confirma a palavra-passe</label>
                <input type="password" name="pwd-repeat" placeholder="Você precisa ter de 6 a 15 caracteres" required>
            </div>

            <div class="bot">
                <button type="submit" name="signup-submit">Sign Up</button>
            </div>

           
        </div>

    </form>

   
</body>
</html>

      