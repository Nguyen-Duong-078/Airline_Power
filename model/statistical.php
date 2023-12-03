<?php
function thongke()
{
    $sql = "SELECT type_ticket.Ticket_ID as mave, type_ticket.Ticket_name as tenve, count(flights.Flight_ID) as countflight, min(flights.Price) as mingia, max(flights.Price) as maxgia, avg(flights.Price) as avggia ";
    $sql .= "from flights left join type_ticket on type_ticket.Ticket_ID = flights.Ticket ";
    $sql .= "group by type_ticket.Ticket_ID"; // Dựa theo dữ liệu của bảng ticket
    $listthongke = pdo_query($sql);
    return $listthongke;
}
