<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");

    $message = '';
    if($_GET['a']=="agregar"){     
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['edad'])){


                    $sql = "INSERT INTO instructor (nombre, apellido1, apellido2, edad) VALUES (:nombre, :apellido1,
                            :apellido2, :edad)";

                    $stmt = $conn->prepare($sql);
                    //asignar nombres del formulario a los nombres de parametros SQL
                    $stmt->bindParam(':nombre', $_POST['nombre']);
                    $stmt->bindParam(':apellido1', $_POST['apellido1']);
                    $stmt->bindParam(':apellido2', $_POST['apellido2']);
                    $stmt->bindParam(':edad', $_POST['edad']);

                    if($stmt->execute()){
                        $message = 'Se ha añadido un nuevo socio correctamente.';
                        $_SESSION['mensaje_registro'] = $message; 
                        header('location:../instructores.php');
                        exit;
                    } else {
                        $message = 'Ha ocurrido un error añadiendo al nuevo usuario';
                    }
                
        }
    } else if($_GET['a'] == "modificar"){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['edad'])){


            $sql = "UPDATE instructor SET nombre =:nombre, apellido1=:apellido1, apellido2=:apellido2, edad=:edad WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':nombre', $_POST['nombre']);
            $stmt->bindParam(':apellido1', $_POST['apellido1']);
            $stmt->bindParam(':apellido2', $_POST['apellido2']);
            $stmt->bindParam(':edad', $_POST['edad']);
            $stmt->execute();
            header('location:../instructores.php');  
            exit;
        }
    } else if ($_GET['a'] == "eliminar"){
    
            $sql = "DELETE FROM instructor WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            header('location:../instructores.php');  
            exit;
        
    }
    
?>