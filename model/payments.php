<?php
function loadAll_payments()
{
    $sql = "SELECT * FROM payments";
    $list_payments = pdo_query($sql);
    return $list_payments;
}
