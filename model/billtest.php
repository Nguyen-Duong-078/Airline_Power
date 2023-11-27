<?php
    function loadone_bill(){
        $sql = "SELECT * FROM bill WHERE 1";
        $loadonebill = pdo_query_one($sql);
        return $loadonebill;
    }
?>