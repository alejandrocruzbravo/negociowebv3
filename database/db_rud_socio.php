<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");

    $message = '';
    if($_GET['a']=="agregar"){     
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['mensualidad'])){


                    $sql = "INSERT INTO socios (nombre, apellido1, apellido2, mensualidad) VALUES (:nombre, :apellido1,
                            :apellido2, :mensualidad)";

                    $stmt = $conn->prepare($sql);
                    //asignar nombres del formulario a los nombres de parametros SQL
                    $stmt->bindParam(':nombre', $_POST['nombre']);
                    $stmt->bindParam(':apellido1', $_POST['apellido1']);
                    $stmt->bindParam(':apellido2', $_POST['apellido2']);
                    $stmt->bindParam(':mensualidad', $_POST['mensualidad']);

                    if($stmt->execute()){
                        $message = 'Se ha añadido un nuevo socio correctamente.';
                        $_SESSION['mensaje_registro'] = $message; 
                        header('location:../socios.php');
                        exit;
                    } else {
                        $message = 'Ha ocurrido un error añadiendo al nuevo usuario';
                    }
                
        }
    } else if($_GET['a'] == "modificar"){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) &&!empty($_POST['mensualidad'])){


            $sql = "UPDATE socios SET nombre =:nombre, apellido1=:apellido1, apellido2=:apellido2, mensualidad=:mensualidad WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':nombre', $_POST['nombre']);
            $stmt->bindParam(':apellido1', $_POST['apellido1']);
            $stmt->bindParam(':apellido2', $_POST['apellido2']);
            $stmt->bindParam(':mensualidad', $_POST['mensualidad']);
            $stmt->execute();
            header('location:../socios.php');  
            exit;
        }
    } else if ($_GET['a'] == "eliminar"){
    
            $sql = "DELETE FROM socios WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            header('location:../socios.php');  
            exit;
        
    } else if ($_GET['a'] == "cobrar"){
        $records = $conn->prepare('SELECT membresia.id, membresia.precio AS precio FROM membresia,socios WHERE socios.id=:id AND socios.mensualidad=membresia.id');
        $records->bindParam(':id', $_GET['id']);
        $records->execute();
        
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        $precio=$results[0]['precio'];

        $sql = "INSERT INTO pagos (cantidad, concepto, id_socio, id_membresia, precio, status) VALUES 
        (:cantidad, :concepto, :id_socio, :id_membresia, :precio, 'A')";

        $stmt = $conn->prepare($sql);
        //asignar nombres del formulario a los nombres de parametros SQL
        $stmt->bindParam(':cantidad', $_POST['cantidad']);
        $stmt->bindParam(':concepto', $_POST['concepto']);
        $stmt->bindParam(':id_socio', $_GET['id']);

        $stmt->bindParam(':id_membresia', $_POST['mensualidad']);
        $stmt->bindParam(':precio', $precio);
    
        if($stmt->execute()){
            $message = 'Se ha añadido un nueva membresia correctamente.';
            $_SESSION['mensaje_registro'] = $message; 
            header('location:../socios.php');
            exit;
        } else {
            $message = 'Ha ocurrido un error añadiendo al nuevo usuario';
        }
    
}
    
?>