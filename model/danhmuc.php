<?php
function insert_flight($Flight_Number, $Start_City, $Arrival_City, $Departure_Time, $Arrival_Time, $Price, $Flight_time)
{
    $sql = "INSERT INTO flights (Flight_Number, Start_City, Arrival_City, Departure_Time, Arrival_Time, Price, Flight_time) 
    VALUES ('$Flight_Number','$Start_City','$Arrival_City','$Departure_Time','$Arrival_Time','$Price','$Flight_time')";
    pdo_execute($sql);
}

function deleta_danhmuc($ID)
{
    $sql = "DELETE FROM flights WHERE Flight_ID =" . $ID;
    pdo_execute($sql);
}

function loadAll_flight()
{
    $sql = "SELECT * FROM flights order by Flight_ID desc";
    $list_flight = pdo_query($sql);
    return $list_flight;
}

function loadOne_flight()
{
    $sql = "SELECT * FROM flights WHERE Flight_ID=" . $_GET['id'];
    $update_flight = pdo_query_one($sql);
    return $update_flight;
}

function Update_danhmuc($Flight_ID, $Flight_Number, $Start_City, $Arrival_City, $Departure_Time, $Arrival_Time, $Price, $Flight_time)
{
    $sql = "UPDATE flights SET Flight_Number = '" . $Flight_Number . "', Start_City = '" . $Start_City . "', Arrival_City = '" . $Arrival_City . "', Departure_Time = '" . $Departure_Time . "', Arrival_Time = '" . $Arrival_Time . "', Price = '" . $Price . "', Flight_time = '" . $Flight_time . "'  WHERE Flight_ID=" . $Flight_ID;
    pdo_execute($sql);
}
