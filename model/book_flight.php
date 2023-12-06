<?php
function insert_book($Flight_ID, $User_ID, $Name, $Sex, $CCCD, $birth, $Start_city, $End_city, $Departure_Time, $Arrival_Time, $Booking_Date, $Total_Price, $Seat_Number, $Ticket)
{
    $sql = "INSERT INTO bookings(Flight_ID, User_ID, Name, Sex, CCCD, birth, Start_city, End_city, Departure_Time, Arrival_Time, Booking_Date, Total_Price, Seat_Number, Ticket) VALUES ('$Flight_ID','$User_ID', '$Name', '$Sex', '$CCCD', '$birth', '$Start_city', '$End_city', '$Departure_Time', '$Arrival_Time','$Booking_Date', '$Total_Price', '$Seat_Number', '$Ticket')";
    pdo_execute($sql);
}

function loadAll_book()
{
    $sql = "SELECT * FROM bookings order by Booking_ID desc";
    $listbook = pdo_query($sql);
    return $listbook;
}

function loadAll_book_user($User_ID)
{
    $sql = "SELECT * FROM bookings WHERE User_ID = '$User_ID' order by Booking_ID desc";
    $loadAll_book_user = pdo_query($sql);
    return $loadAll_book_user;
}

function deleta_book($ID)
{
    $sql = "DELETE FROM bookings WHERE Booking_ID =" . $ID;
    pdo_execute($sql);
}
