<<<<<<< Updated upstream
<?php
function insert_type_ticket($Ticket_name, $Status, $Flights_Tick, $Ticket_number)
{
    $sql = "INSERT INTO type_ticket(Ticket_name, Status, Flights_Tick, Ticket_number)
        VALUES ('$Ticket_name','$Status', '$Flights_Tick','$Ticket_number')";
    pdo_execute($sql);
}

function loadAll_type_ticket()
{
    $sql = "SELECT * FROM type_ticket";
    $list_type_ticket = pdo_query($sql);
    return $list_type_ticket;
}

function loadOne_type_ticket($ID)
{
    $sql = "SELECT * FROM type_ticket WHERE Ticket_ID=" . $ID;
    $update_type_ticket = pdo_query_one($sql);
    return $update_type_ticket;
}
function Update_type_ticket($Ticket_ID, $Ticket_name, $Status, $Flights_Tick, $Ticket_number)
{
    $sql = "UPDATE type_ticket SET Ticket_name = '" . $Ticket_name . "', Status = '" . $Status . "', Flights_Tick = '" . $Flights_Tick . "', Ticket_number = '" . $Ticket_number . "'  WHERE Ticket_ID=" . $Ticket_ID;
    pdo_execute($sql);
}

function delete_type_ticket($Ticket_ID)
{
    $sql = "DELETE FROM type_ticket WHERE Ticket_ID=" . $Ticket_ID;
    pdo_execute($sql);
}
=======
<?php 
    function insert_type_ticket($Ticket_name,$Status){
        $sql = "INSERT INTO type_ticket(Ticket_name,Status)
        VALUES ('$Ticket_name','$Status')";
        pdo_execute($sql);
    }

    function loadAll_type_ticket()
    {
        $sql = "SELECT * FROM type_ticket";
        $list_type_ticket = pdo_query($sql);
        return $list_type_ticket;
    }

    function delete_type_ticket($Ticket_ID)
    {  
        $sql = "DELETE FROM type_ticket WHERE Ticket_ID" . $Ticket_ID;
        pdo_execute($sql);
    }
    function loadOne_type_ticket()
    {
        $sql = "SELECT * FROM type_ticket WHERE Ticket_ID=" . $_GET['id'];
        $update_type_ticket = pdo_query_one($sql);
        return $update_type_ticket;
    }
    function Update_type_ticket($Ticket_ID,$Ticket_name,$Status)
    {
        $sql = "UPDATE type_ticket SET Ticket_ID = '" . $Ticket_ID  . "', Ticket_name = '" . $Ticket_name . "', Status = '" . $Status . "'  WHERE Ticket_ID=" . $Ticket_ID;
        pdo_execute($sql);
    }
?>
>>>>>>> Stashed changes
