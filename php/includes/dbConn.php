<?php
// DB Connection function
function connectToDB()
{
//    $db = mysqli_connect("localhost", "root", "inet2005", "employees");
    $db = mysqli_connect("localhost", "root", "inet2005", "northwind");
    if (!$db)
    {
        die("Unable to connect to database: " . mysqli_connect_error());
    }
    return $db;
}
?>
