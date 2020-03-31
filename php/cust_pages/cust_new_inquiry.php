<?php
require('cust_isLoggedIn.php');
checkIfCustLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("../includes/head.php"); ?>
    <link rel="stylesheet" href="../../css/cust_admin.css">
    <title>New Inquiry</title>
</head>

<body>
<!-- HEADER -->
<?php include_once("cust_navbar_admin.php"); ?>

<div class="container my-5">
    <h2>Inquiries</h2>
    <hr>
    <div class="my-3">
        <a href="cust_inquiries.php">Current Inquiries</a>  |
        <a href="cust_new_inquiry.php">New Inquiry</a>
    </div>

    <div class="my-5">
        <h4>This is an awesome New Inquiry page!</h4>
    </div>
    <br><br><br><br><br>
</div>

<!-- FOOTER -->
<?php include_once("../includes/footer.php"); ?>
<?php include_once("../includes/scripts.php"); ?>
</body>

</html>




