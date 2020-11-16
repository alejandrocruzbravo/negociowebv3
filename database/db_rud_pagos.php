<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");

    $message = '';
    if($_GET['a']=="cobrar"){     
        if(!empty($_POST['cantidad']) && !empty($_POST['concepto'])){


                    $sql = "INSERT INTO pagos (cantidad, concepto, id_socio, id_membresia, precio, total, status) VALUES 
                    (:cantidad, :concepto, :id_socio, :id_membresia, :precio, :total, 'A')";
 
                    $stmt = $conn->prepare($sql);
                    //asignar nombres del formulario a los nombres de parametros SQL
                    $stmt->bindParam(':cantidad', $_POST['cantidad']);
                    $stmt->bindParam(':concepto', $_POST['concepto']);
                    $stmt->bindParam(':id_socio', $_POST['socios']);

                    $stmt->bindParam(':id_membresia', $_GET['m']);
                    $stmt->bindParam(':precio', $_GET['p']);

                    $precio= $_POST['cantidad'] * $_GET['p'];
                    $stmt->bindParam(':total' ,$precio);
                    echo $_GET['p'];
                    echo $_POST['cantidad'];
                    



                    if($stmt->execute()){
                        $message = 'Se ha añadido un nueva membresia correctamente.';
                        $_SESSION['mensaje_registro'] = $message; 
                        header('location:../pagos.php');
                        exit;
                    } else {
                        $message = 'Ha ocurrido un error añadiendo al nuevo usuario';
                    }
                
        }
    } else if($_GET['a'] == "modificar"){
        if(!empty($_POST['tipo']) && !empty($_POST['precio'])){


            $sql = "UPDATE membresia SET tipo=:tipo, precio=:precio WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':tipo', $_POST['tipo']);
            $stmt->bindParam(':precio', $_POST['precio']);
            $stmt->execute();
            header('location:../pagos.php');  
            exit;
        }
    } else if ($_GET['a'] == "cancelar"){
    
            $sql = "UPDATE pagos SET status='C' WHERE id=:id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            header('location:../pagos.php');  
            exit;
    }
    
?>