<?php
function insert_user($Username, $Password, $Email, $FullName)
{
    $sql = "INSERT INTO users (Username, Password, Email, FullName) 
    VALUES ('$Username','$Password','$Email','$FullName')";
    pdo_execute($sql);
}

function check_user($User, $Password)
{
    $sql = "SELECT * FROM users WHERE Username='" . $User . "' AND Password='" . $Password . "'";
    $User = pdo_query_one($sql);
    return $User;
}
