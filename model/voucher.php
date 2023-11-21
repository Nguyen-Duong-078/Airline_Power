<?php
    function insert_voucher($Voucher_name,$Voucher_value,$Voucher_start,$Voucher_end){
        $sql = "INSERT INTO voucher( Voucher_name, Voucher_value, Voucher_start, Voucher_end) 
        VALUES ('$Voucher_name','$Voucher_value','$Voucher_start','$Voucher_end')";
        pdo_execute($sql);
    }
    function loadall_voucher(){
        $sql = "SELECT * FROM voucher";
        $listvoucher = pdo_query($sql);
        return $listvoucher;
    }
    function delete_voucher($Voucher_ID){
        $sql = "DELETE FROM voucher WHERE Voucher_ID=". $Voucher_ID;
        pdo_execute($sql);
    }
    function loadone_voucher(){
        $sql ="SELECT * FROM voucher WHERE Voucher_ID=".$_GET['id_voucher'];
        $listonevoucher = pdo_query_one($sql);
        return $listonevoucher;
    }
    function update_voucher($Voucher_ID,$Voucher_name,$Voucher_value,$Voucher_start,$Voucher_end){
        $sql = "UPDATE voucher SET Voucher_name='$Voucher_name',Voucher_value ='$Voucher_value',
        Voucher_start='$Voucher_start',Voucher_end ='$Voucher_end' WHERE Voucher_ID=". $Voucher_ID;
        pdo_execute($sql);
    }
    
?>