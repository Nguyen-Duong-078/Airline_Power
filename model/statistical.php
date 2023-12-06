<?php
function thongke()
{
    $sql = "SELECT Booking_Date, Flight_ID, SUM(Total_Price) as Sum_price, count(Ticket) as Count_Flight  FROM bookings GROUP BY Flight_ID, Booking_Date  order by Booking_Date desc";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
