<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");

    $message = '';

     
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT count(id) contador FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if ($results ['contador'] == 0) {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':email', $_POST['email']);
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $stmt->bindParam(':password', $password);

                if($stmt->execute()){
                    $message = 'Se ha creado el usuario correctamente, puede iniciar sesión.';
                    $_SESSION['mensaje_registro'] = $message; 
                    header('location: ../login.php');
                    exit;
                } else {
                    $message = 'Ha ocurrido un error creando al usuario';
                }
            }
        } else {

            $message = 'Este usuario ya existe';
            $_SESSION['mensaje_registro'] = $message;
            $_SESSION['email'] = $_POST['email'];
            header('location: ../signup.php');
            exit;
        }
    }
?>