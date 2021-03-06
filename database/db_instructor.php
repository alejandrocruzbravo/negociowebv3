<?php

    function selectAll(){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, nombre, apellido1, apellido2, edad, registro FROM instructor');
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    function selectId($id){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, nombre, apellido1, apellido2, edad, registro FROM instructor WHERE id=:id');
        $records->bindParam(':id', $id);
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
?>