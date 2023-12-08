<?php
function insert_book($Flight_ID, $User_ID, $Name, $Sex, $CCCD, $birth, $Flight_date, $Start_city, $End_city, $Departure_Time, $Arrival_Time, $Booking_Date, $Total_Price, $Seat_Number, $Ticket, $Check_In)
{
    $sql = "INSERT INTO bookings(Flight_ID, User_ID, Name, Sex, CCCD, birth, Flight_date, Start_city, End_city, Departure_Time, Arrival_Time, Booking_Date, Total_Price, Seat_Number, Ticket, Check_InFL) VALUES ('$Flight_ID','$User_ID', '$Name', '$Sex', '$CCCD', '$birth', '$Flight_date', '$Start_city', '$End_city', '$Departure_Time', '$Arrival_Time','$Booking_Date', '$Total_Price', '$Seat_Number', '$Ticket', '$Check_In')";
    pdo_execute($sql);
}

function loadAll_book()
{
    $sql = "SELECT * FROM bookings order by Booking_ID desc";
    $listbook = pdo_query($sql);
    return $listbook;
}

function loadOne_book($ID)
{
    $sql = "SELECT * FROM bookings WHERE Booking_ID=" . $ID;
    $loadOne_book = pdo_query_one($sql);
    return $loadOne_book;
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

function update_book($Booking_ID)
{
    $sql = "UPDATE bookings SET Check_InFL = 'Hủy' WHERE Booking_ID =" . $Booking_ID;
    pdo_execute($sql);
}

function update_pay($Booking_ID, $Pay)
{
    $sql = "UPDATE bookings SET Pay = '" . $Pay  . "' WHERE Booking_ID =" . $Booking_ID;
    pdo_execute($sql);
}
