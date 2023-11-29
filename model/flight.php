<?php
function insert_flight($Flight_Number, $Start_City, $Arrival_City, $Flight_date, $Departure_Time, $Arrival_Time, $Price, $Passenger, $Voucher, $Flight_time, $Ticket)
{
    $sql = "INSERT INTO flights (Flight_Number, Start_City, Arrival_City, Flight_date, Departure_Time, Arrival_Time, Price, Passenger, Voucher_ID, Flight_time, Ticket) 
    VALUES ('$Flight_Number','$Start_City','$Arrival_City','$Flight_date','$Departure_Time','$Arrival_Time','$Price', '$Passenger', '$Voucher','$Flight_time', '$Ticket')";
    pdo_execute($sql);
}

function deleta_flight($ID)
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

function loadOne_flight_book()
{
    $sql = "SELECT * FROM flights WHERE 1";
    $update_flight = pdo_query_one($sql);
    return $update_flight;
}

function Update_danhmuc($Flight_ID, $Flight_Number, $Start_City, $Arrival_City, $Departure_Time, $Arrival_Time, $Price, $Flight_time)
{
    $sql = "UPDATE flights SET Flight_Number = '" . $Flight_Number . "', Start_City = '" . $Start_City . "', Arrival_City = '" . $Arrival_City . "', Departure_Time = '" . $Departure_Time . "', Arrival_Time = '" . $Arrival_Time . "', Price = '" . $Price . "', Flight_time = '" . $Flight_time . "'  WHERE Flight_ID=" . $Flight_ID;
    pdo_execute($sql);
}

// function Search_flight($Flight_Number, $Start_City, $Arrival_City)
// {
//     $sql = "SELECT * FROM flights WHERE Flight_Number = '" . $Flight_Number . "' AND Start_City='" . $Start_City . "' AND Arrival_City='" . $Arrival_City . "'";
//     $Search_flight = pdo_query($sql);
//     return $Search_flight;
// }
