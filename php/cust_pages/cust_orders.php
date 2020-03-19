<?php
    require('cust_isLoggedIn.php');
    checkIfCustLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("../includes/head.php"); ?>
    <link rel="stylesheet" href="../../css/cust_admin.css">
    <title>Customer Orders</title>
</head>

<body>
    <!-- HEADER -->
    <?php include_once("cust_navbar_admin.php"); ?>

    <div class="my-5">Content</div>

    <!-- FOOTER -->
    <?php include_once("../includes/footer.php"); ?>
    <?php include_once("../includes/scripts.php"); ?>
</body>

</html>


