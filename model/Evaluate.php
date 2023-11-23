<?php
function inser_comment($noidung, $ID_User, $idpro, $Evaluate_Date)
{
    $sql = "INSERT INTO evaluate(Comment, ID_User, ID_pro, Evaluate_Date) VALUE('$noidung','$ID_User','$idpro','$Evaluate_Date')";
    pdo_execute($sql);
}
function loadAll_comment($idpro)
{
    $sql = "SELECT * FROM evaluate  where ID_pro='" . $idpro . "' order by Evaluate_ID desc";
    $list_comment = pdo_query($sql);
    return $list_comment;
}
function loadAll_comments($idpro)
{
    $sql = "SELECT * FROM evaluate  where 1";
    if ($idpro > 0) $sql .= " AND idpro='" . $idpro . "'";
    $sql .= " order by Evaluate_ID desc";
    $list_comment = pdo_query($sql);
    return $list_comment;
}

function deleta_comment($ID)
{
    $sql = "DELETE FROM evaluate WHERE Evaluate_ID =" . $ID;
    pdo_execute($sql);
}
