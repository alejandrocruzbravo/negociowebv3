<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
    $message = '';
 
    if($_GET['a']=="agregar"){  
       echo "verificar contenidos";
        if(!empty($_POST['id_Memb']) && !empty($_POST['tipo_Memb']) && !empty($_POST['precio_Memb'])){
            
            echo "proceso de inserción";
            $records = $conn->prepare("SELECT count(id) contador FROM membresia WHERE id=:id_mem')");
            $records->bindParam(':id_mem', $_POST['id_Memb']);
            
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
        
            if($results['contador'] == 0){
                

                $sql = "INSERT INTO membresia (id, tipo, precio) VALUES (:idMem, :tipoMem, :precioMem)";
                    
                $stmt = $conn->prepare($sql);
                
                //asignar nombres del formulario a los nombres de parametros SQL
                $stmt->bindParam(':idMem', $_POST['id_Memb']);
                $stmt->bindParam(':tipoMem', $_POST['tipo_Memb']);
                $stmt->bindParam(':precioMem', $_POST['precio_Memb']);
                $stmt->execute();

                echo "registro insertado...";
                $message = 'Se ha añadido un nueva membresia correctamente.';
                $_SESSION['mensaje_registro'] = $message; 
                        
                header('location:../membresia.php');
                exit;
            }else {
            
                $message = 'Ha ocurrido un error añadiendo la nueva membresia';
                $_SESSION['mensaje_registro'] = $message; 
            }
        }
    } else if($_GET['a'] == "modificar"){

        echo "modificar";
        if(!empty($_POST['tipo_Memb']) && !empty($_POST['precio_Memb'])){


            $sql = "UPDATE membresia SET tipo=:tipo, precio=:precio WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_GET['id_Memb']);
            $stmt->bindParam(':tipo', $_POST['tipo_Memb']);
            $stmt->bindParam(':precio', $_POST['precio_Memb']);
            $stmt->execute();
            header('location:../membresia.php');  
            exit;
        }
    } else if ($_GET['a'] == "eliminar"){
    echo "eliminar";
        $sql = "DELETE FROM membresia WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $_GET['id_Memb']);
        $stmt->execute();
        header('location:../membresia.php');  
        exit;
    }   

    echo "<br> salto;"
?>