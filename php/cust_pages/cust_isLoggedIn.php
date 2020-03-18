<?php
    function checkIfCustLoggedIn()
    {
        session_start();
        if(empty($_SESSION['LoggedInCustUser']))
        {
            header("location:../../index.php");
        }
    }

