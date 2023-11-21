<?php
function insert_user($Username, $Password, $Email, $FullName)
{
    $sql = "INSERT INTO users (Username, Password, Email, FullName) 
    VALUES ('$Username','$Password','$Email','$FullName')";
    pdo_execute($sql);
}
