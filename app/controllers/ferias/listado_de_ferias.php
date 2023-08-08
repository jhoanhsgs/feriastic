<?php
    
        $sql_ferias = "SELECT * FROM tbl_feria";
        $query_ferias = $pdo->prepare($sql_ferias);
        $query_ferias->execute();
        $datos_ferias =$query_ferias->fetchAll(PDO::FETCH_ASSOC);

        