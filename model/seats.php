<?php
function insert_seats($Seat_Number, $Status)
{
    $sql = "INSERT INTO seats(Seat_Number,Status) VALUES ('$Seat_Number','$Status')";
    pdo_execute($sql);
}

function loadAll_seats()
{
    $sql = "SELECT * FROM seats order by Seat_ID desc";
    $list_seats = pdo_query($sql);
    return $list_seats;
}

// Hàm để đặt hoặc hủy một ghế
// function processSeat($Seat_Number, $action)
// {
//     if ($action == "book") {
//         // Đặt ghế mới
//         $sql = "UPDATE seats SET status = 'booked', WHERE Seat_Number =" . $Seat_Number;
//         pdo_execute($sql);
//     } else
//     if ($action == "cancel") {
//         // Hủy ghế đã đặt
//         $sql = "UPDATE seats SET status = 'available', WHERE Seat_Number =" . $Seat_Number;
//         pdo_execute($sql);
//     }
// }
