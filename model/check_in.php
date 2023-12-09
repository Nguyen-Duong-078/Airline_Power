<?php
    function loadall_checkin(){
        $sql = "SELECT * FROM check_in order by id_check desc";
        $list_checkin = pdo_query($sql);
        return $list_checkin;
    }
?>