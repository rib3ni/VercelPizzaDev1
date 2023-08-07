<?php
if (isset($_POST['login-submit'])) {
    
    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];   
    $password = $_POST['pwd'];
    
    
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";     
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            
            echo "<script> 
            alert('Algo deu errado, entre em contato com a nossa equipe !!');
            window.location.href = 'login.php';
            </script>";
             exit();
    
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if($pwdCheck == false){

                    echo "<script> 
                    alert('Você Digitou a senha errada !!');
                    window.location.href = 'login.php';
                    </script>";
                     exit();  
                }
                else if($pwdCheck == true) {
                    session_start();                                //create of sessions
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['uidUsers'];
                    $_SESSION['role'] = $row['role_id'];
                    
                    echo "<script> 
                    alert('O seu login foi efetuado com sucesso !!');
                    window.location.href='menu.php';
                    </script>";
                    
                    exit();

                }
                else {
                    echo "<script> 
                    alert('Erro técnico, entre em contato com a nossa equipe !!');
                    window.location.href = 'login.php';
                    </script>";
                    exit();    
                }
            }
            else{
                echo "<script> 
                alert('Você ainda não se registrou !!');
                window.location.href = 'login.php';
                </script>";
                exit();
            }
        }
    }
    

else{
    echo "<script> 
    alert('Erro técnico, entre em contato com a nossa equipe !!');
    window.location.href = 'login.php';
    </script>";
    exit();
}
