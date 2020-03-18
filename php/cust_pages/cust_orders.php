<?php
    require('cust_isLoggedIn.php');
    checkIfCustLoggedIn();
?>
<h3>This is Customer Orders Page</h3>

<form name="LogoutForm" action="../includes/logOut.php" method="post">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="logoutButton" value="Log Out">
        Log out
    </button>
</form>