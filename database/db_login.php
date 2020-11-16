<?php
    
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");

    
    
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT count(id) contador FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

       if ($results ['contador'] > 0) {
            $records = $conn->prepare('SELECT id, email, password, rol FROM users WHERE email=:email');
            $records->bindParam(':email', $_POST['email']);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            $message='';
            
                 
            if (password_verify ($_POST ['password'], $results ['password'])){
                $_SESSION['rol'] = $results['rol'];
                $_SESSION['user_id'] = $results['id'];
                $_SESSION['email'] = $results['email'];
                header('location: ../index.php');
                
            } else {
                $message = 'Estas credenciales no coinciden';
            }
        }
        else {
            $message = 'Usuario no existe.';
            $_SESSION['mensaje_registro'] = $message;
            //$_SESSION['email'] = $_POST['email'];
            header('location: ../login.php');
            exit;
        }       
    }
?>