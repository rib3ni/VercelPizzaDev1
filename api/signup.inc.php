
<?php

//Essa função verifica se o número de caracteres da variavel $val está entre $x e $y nestre caso se a senha possui de 6 a 20 caracteres
function between($val, $x, $y){
    $val_len = strlen($val);
    return ($val_len >= $x && $val_len <= $y)?TRUE:FALSE;
}


//Se o botão de registrar é clickado
if(isset($_POST['signup-submit'])) {

    
    require 'dbh.inc.php';
    
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        echo "<script> 
        alert('Você digitou algo errado !! Porfavor verifique todos os critérios e informações que você digitou.');
        window.location.href = 'signup.php';
        </script>";
        exit(); 
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script> 
        alert('Você digitou algo errado !! Porfavor verifique todos os critérios e informações que você digitou.');
        window.location.href = 'signup.php';
        </script>";
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username) || !between($username,4,20)) {
        echo "<script> 
        alert('Você digitou algo errado !! Porfavor verifique todos os critérios e informações que você digitou.');
        window.location.href = 'signup.php';
        </script>";
        exit();
    }
    else if(!between($password,6,20)) {
        echo "<script> 
        alert('A sua senha deve possuir 6 a 20 caracteres');
        window.location.href = 'signup.php';
        </script>";
        exit();
    }
    else if($password !== $passwordRepeat){
        
        echo "<script> 
        alert('As passwords que você digitou não conhecidem !!');
        window.location.href = 'signup.php';
        </script>";
        exit();
            
    }

   else {
       
       $sql = "SELECT uidUsers, emailUsers FROM users WHERE uidUsers=? OR emailUsers=?";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)){

            echo "<script> 
            alert('Algo deu errado, entre em contato com a nossa equipe !!');
            window.location.href = 'signup.php';
            </script>";

         exit();
       }
       else {
           mysqli_stmt_bind_param($stmt, "ss", $username, $email);     //elenxos an uparxei email kai username idi
           mysqli_stmt_execute($stmt);
           mysqli_stmt_store_result($stmt);
           $resultCheck = mysqli_stmt_num_rows($stmt);
             if($resultCheck != 0){

                echo "<script> 
                alert('Este username ou email já estão em uso !!');
                window.location.href = 'signup.php';
                </script>";

           }
          
           
           else {
            $sql = "INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES(?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt, $sql)){

                    echo "<script> 
                    alert('Algo deu errado, entre em contato com a nossa equipe !!');
                    window.location.href = 'signup.php';
                    </script>";

                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);    //encrypting password
                            
                            
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    echo "<script> 
                    alert('O seu registro foi efetuado com sucesso !!');
                    window.location.href = 'index.php';
                    </script>";
                    exit();
                }   
                
           }
           
       }
   } 
   //kleinw to connection
   mysqli_stmt_close($stmt);
   mysqli_close($conn);
   
}
else{
    echo "<script> 
    alert('Erro técnico, entre em contato com a nossa equipe !!');
    window.location.href = 'signup.php';
    </script>";
    exit();
    
}
?>