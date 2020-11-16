<?php

    function selectAll(){
        require_once ($_SERVER['DOCUMENT_ROOT']."/gymsystem/database/database.php");
        $records = $conn->prepare('SELECT id, usuario, email, producto, fecha FROM compras');
        $records->execute();
        $results = $records->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
?>