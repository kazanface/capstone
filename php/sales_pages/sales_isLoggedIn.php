<?php
function checkIfSalesLoggedIn()
{
    session_start();
    if(empty($_SESSION['LoggedInSalesUser']))
    {
        header("location:../../index.php");
    }
}

