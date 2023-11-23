<?php
function insert_blog($Blog_name, $Blog_content, $Date, $Image)
{
    $sql = "INSERT INTO blog (Blog_name, Blog_content, Date, Image) VALUES ('$Blog_name','$Blog_content','$Date', '$Image')";
    pdo_execute($sql);
}
function loadAll_blog()
{
    $sql = "SELECT * FROM blog";
    $list_blog = pdo_query($sql);
    return $list_blog;
}
function deleta_blog($ID)
{
    $sql = "DELETE FROM blog WHERE Blog_ID =" . $ID;
    pdo_execute($sql);
}
