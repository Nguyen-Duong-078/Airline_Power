<?php
function insert_momo($User_ID, $partnerCode, $orderId, $orderInfo, $price, $Time_set, $Method, $Status)
{
    $sql = "INSERT INTO bill (User_ID, partnerCode, orderId, orderInfo,  price, Time_set, Method, Status) 
    VALUES ('$User_ID','$partnerCode','$orderId','$orderInfo','$price','$Time_set','$Method','$Status')";
    pdo_execute($sql);
}

function loadAll_bill()
{
    $sql = "SELECT * FROM bill order by Bill_ID desc";
    $list_bill = pdo_query($sql);
    return $list_bill;
}

function deleta_bill($ID)
{
    $sql = "DELETE FROM bill WHERE Bill_ID =" . $ID;
    pdo_execute($sql);
}

function insert_vnpay($User_ID, $partnerCode, $orderId, $orderInfo, $price, $Time_set, $Method, $Status)
{
    $sql = "INSERT INTO bill (User_ID, partnerCode, orderId, orderInfo, price, Time_set, Method, Status) 
    VALUES ('$User_ID','$partnerCode','$orderId','$orderInfo','$price','$Time_set','$Method', '$Status')";
    pdo_execute($sql);
}
