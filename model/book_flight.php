<?php
function insert_book($Flight_ID, $User_ID, $Name, $Sex, $CCCD, $birth, $Start_city, $End_city, $Departure_Time, $Arrival_Time, $Booking_Date, $Total_Price, $Seat_Number, $Ticket, $Check_In)
{
    $sql = "INSERT INTO bookings(Flight_ID, User_ID, Name, Sex, CCCD, birth, Start_city, End_city, Departure_Time, Arrival_Time, Booking_Date, Total_Price, Seat_Number, Ticket, Check_InFL) VALUES ('$Flight_ID','$User_ID', '$Name', '$Sex', '$CCCD', '$birth', '$Start_city', '$End_city', '$Departure_Time', '$Arrival_Time','$Booking_Date', '$Total_Price', '$Seat_Number', '$Ticket', '$Check_In')";
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

function loadall_book_check()
{
    $sql = "SELECT Name, Sex, birth, CCCD, Total_Price, Ticket, Status  FROM bookings INNER JOIN check_in ON bookings.Check_in = check_in.Check_ID";
    $load_check = pdo_query($sql);
    return $load_check;
}
function check_in($Booking_ID)
{
    $sql = "UPDATE bookings SET bookings.id_check = 1 WHERE bookings.Booking_ID = $Booking_ID";
    pdo_execute($sql);
}
