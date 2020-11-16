<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");


        if(!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['producto'])){

            echo "prueba1";

                    $sql = "INSERT INTO compras (usuario, email, producto) VALUES (:usuario, :email, :producto)";

                    $stmt = $conn->prepare($sql);
                    //asignar nombres del formulario a los nombres de parametros SQL
                    $stmt->bindParam(':usuario', $_POST['usuario']);
                    $stmt->bindParam(':email', $_POST['email']);
                    $stmt->bindParam(':producto', $_POST['producto']);

                    if($stmt->execute()){
                        header('location:../shop.php');
                        exit;
                    } else {
                        $message = 'Ha ocurrido un error en la compra';
                    }
                
        }
?>