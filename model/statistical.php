<?php
function thongke($Booking_Dates)
{
    $sql = "SELECT Flight_ID, SUM(Total_Price) as Sum_price, count(Ticket) as Count_Flight  FROM bookings WHERE Booking_Date = '$Booking_Dates' GROUP BY Booking_Date, Flight_ID";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

function chart_week($firstDayOfWeek, $currentDate)
{
    $sql = "SELECT Flight_ID, Booking_Date, SUM(Total_Price) as Sum_price, count(Ticket) as Count_Flight  FROM bookings WHERE Booking_Date >= '$firstDayOfWeek' AND Booking_Date <= '$currentDate' GROUP BY Booking_Date, Flight_ID ORDER BY Booking_ID";
    $list_week = pdo_query($sql);
    return $list_week;
}

function chart_month($currentMonth)
{
    $sql = "SELECT Flight_ID, DATE_FORMAT(Booking_Date, '%Y-%m') AS Month, SUM(Total_Price) as Sum_price, count(Ticket) as Count_Flight  FROM bookings WHERE DATE_FORMAT(Booking_Date, '%Y-%m') = '$currentMonth' GROUP BY Month, Flight_ID";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

function revenue()
{
    $sql = "SELECT SUM(Total_Price) as SumPrice, count(Ticket) as SumTicket FROM bookings WHERE 1";
    $revenue = pdo_query($sql);
    return $revenue;
}
