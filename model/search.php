<?php
function search_flight($Start_City, $Arrival_City)
{
    $sql = "SELECT * FROM flights where 1";
    if ($Start_City != "" && $Arrival_City != "") {
        $sql .= " and Start_City like '%" . $Start_City . "%'";
        $sql .= " and Arrival_City like '%" . $Arrival_City . "%'";
    }
    $search_flight = pdo_query($sql);
    return $search_flight;
}

function loadOne_search_flight($ID)
{
    $sql = "SELECT * FROM flights WHERE Flight_ID=" . $ID;
    $loadOne_search_flight = pdo_query_one($sql);
    return $loadOne_search_flight;
}
