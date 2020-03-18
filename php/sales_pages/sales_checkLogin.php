<?php
session_start();   // gives access to session array

// Connection to db
include("../includes/dbConn.php");
$conn = connectToDB();

$username = $_POST['loginSalesUser'];
$pwd = $_POST['loginSalesPwd'];

$sql = "SELECT * FROM newUsers WHERE user_name = '$username' and user_pwd = '$pwd'";

$result = mysqli_query($conn, $sql);
if(!$result){
    die("An error occured in query: " . mysqli_error($conn));
}
mysqli_close($conn);

$count = mysqli_num_rows($result);

if($count == 1) {
    //password matches, grant access
    $_SESSION['LoggedInSalesUser'] = $username;
    header("location:sales_order_dashboard.php");
}


echo "Incorrect Login<br/>";
echo "<a href='../company_pages/sales_login.php'>Try Again</a>";


