<?php
function insert_charging($tax, $service, $Flights_ID)
{
    $sql = "INSERT INTO charging(tax, service,Flights_ID) VALUES ('$tax','$service','$Flights_ID')";
    pdo_execute($sql);
}
function loadall_charging()
{
    $sql = "SELECT * FROM charging";
    $listcharging = pdo_query($sql);
    return $listcharging;
}
function loadone_charging()
{
    $sql = "SELECT * FROM charging where id_charging=" . $_GET['id_charging'];
    $listonecharging = pdo_query_one($sql);
    return $listonecharging;
}
