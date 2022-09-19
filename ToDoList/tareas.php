<?php
    function getTareas(){
        

        $db = new PDO('mysql:host=localhost;'
        .'dbname=db_tareas;charset=utf8',
        'root', '34632290');

        $sentencia = $db->prepare( "SELECT * from tarea" );
        $sentencia->execute();
        return $tareas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
?>