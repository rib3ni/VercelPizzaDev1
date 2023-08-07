<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login1.css">
    <title>Login</title>
</head>

<body>
    <form class="form" action="login.inc.php" method="post">
        <div class="card">   
            <div class="top">
                <img class="imagelogin" src="images/login.png" alt="" width="85" height="85">
                <h2 class="tittle">Login</h2>
                
            </div>
            

            <div class="field">
                <label for="">Utilizador</label>
                <input type="text" name="mailuid" required>
            </div>

            <div class="field">
                <label for="">Palavra-passe</label>
                <input type="password" name="pwd"  required>
            </div>

            <div class="bot">
                <button type="submit" name="login-submit">Login</button>
            </div>
            

        </div>

    </form>
</body>
</html>