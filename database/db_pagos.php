<?php
    function selectAll(){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        
        $records = $conn->prepare('SELECT pagos.id, DATE_FORMAT(pagos.fecha,"%d/%m/%Y") 
        as fecha, CONCAT(socios.nombre," ",socios.apellido1," ", socios.apellido2) AS 
        socio,membresia.tipo AS membresia, membresia.precio,cantidad, pagos.concepto, FORMAT (cantidad * pagos.precio, 2) AS total, 
        status AS st FROM pagos, socios, membresia WHERE pagos.id_socio=socios.id AND 
        socios.mensualidad = membresia.id ORDER BY pagos.id DESC');

        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }

    function selectId($id){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, fecha, socio, concepto, total FROM pagos WHERE id=:id');
        $records->bindParam(':id', $id);
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
    function selectAll_socios(){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, CONCAT(id,"- ", nombre," ", apellido1," ", apellido2) as
         socio FROM socios');
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
    function get_membresia($id){
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'gym';
    
        try {
            $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
        } catch (PDOException $e) {
          die('Error de conexión: '.$e->getMessage());
        }
        $records = $conn->prepare('SELECT membresia.id, membresia.precio AS precio FROM membresia,socios WHERE socios.id=:id AND socios.mensualidad=membresia.id');
        $records->bindParam(':id', $id);
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
    function cancelar_pago($id){
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'gym';
    
        try {
            $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
        } catch (PDOException $e) {
          die('Error de conexión: '.$e->getMessage());
        }
        $sql = 'UPDATE pagos SET status="C" WHERE id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt;

    }

?>