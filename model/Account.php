<?php
function insert_user($Username, $Password, $Email, $FullName)
{
    $sql = "INSERT INTO users (User, Password, Email, FullName) 
    VALUES ('$Username','$Password','$Email','$FullName')";
    pdo_execute($sql);
}

function check_user($User, $Password)
{
    $sql = "SELECT * FROM users WHERE User='" . $User . "' AND Password='" . $Password . "' AND role = 1";
    $User = pdo_query_one($sql);
    return $User;
}


function loadAll_User()
{
    $sql = "SELECT * FROM users";
    $list_user = pdo_query($sql);
    return $list_user;
}

function delete_account($ID)
{
    $sql = "DELETE FROM users WHERE User_ID=" . $ID;
    pdo_execute($sql);
}

function Update_account($Ticket_ID, $role, $Status)
{
    $sql = "UPDATE users SET role = '" . $role  . "', Status = '" . $Status . "'  WHERE User_ID=" . $Ticket_ID;
    pdo_execute($sql);
}

function loadOne_account($ID)
{
    $sql = "SELECT * FROM users WHERE User_ID=" . $ID;
    $update_account = pdo_query_one($sql);
    return $update_account;
}
