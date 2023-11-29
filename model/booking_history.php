<?php
function loadall_charging()
{
    $sql = "SELECT * FROM charging";
    $listcharging = pdo_query($sql);
    return $listcharging;
}
