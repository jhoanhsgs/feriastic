<?php
    
        $sql_eventos = "SELECT * FROM tbl_eventos INNER JOIN tbl_lugar on tbl_eventos.fk_lugar_evento = tbl_lugar.id_lugar INNER JOIN tbl_modalidad on tbl_eventos.fk_modalidad = 
            tbl_modalidad.id_modalidad INNER JOIN tbl_tipo_evento on tbl_eventos.fk_tipo_evento = tbl_tipo_evento.id_tipo_evento";
        $query_eventos = $pdo->prepare($sql_eventos);
        $query_eventos->execute();
        $datos_eventos =$query_eventos->fetchAll(PDO::FETCH_ASSOC);

        