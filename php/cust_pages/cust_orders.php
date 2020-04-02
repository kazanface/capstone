<?php
   require('cust_isLoggedIn.php');
    checkIfCustLoggedIn();
    include("../includes/dbConn.php");
    $conn = connectToDB();
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

    <div class="container my-5">
        <div class="row">
            <h2 class="col-8">View Order Status</h2>
        </div>
        <hr>
        <div class="my-4">
            <a href="cust_inquiries.php">All</a>  |
            <a href="cust_new_inquiry.php">Pending payment</a>  |
            <a href="cust_new_inquiry.php">Processing</a>  |
            <a href="cust_new_inquiry.php">On hold</a>  |
            <a href="cust_new_inquiry.php">Completed</a>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-sm table-hover table-condensed table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Order #</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>Estimated Completion</th>
                    <th>Sales Rep</th>
                    <th>Service Name</th>
                    <th>Cost</th>
                    <th>Amount paid</th>
                    <th>Payment due by</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $result = mysqli_query($conn,"SELECT * FROM Orders");
                    while ($row = mysqli_fetch_assoc($result)):
                ?>

                <tr>
                    <td><?php echo $row['OrderID']; ?></td>
                    <td><?php echo $row['ShipCity']; ?></td>
                    <td><?php echo $row['OrderDate']; ?></td>
                    <td><?php echo $row['RequiredDate']; ?></td>
                    <td><?php echo $row['CustomerID']; ?></td>
                    <td><?php echo $row['ShipName']; ?></td>
                    <td><?php echo $row['Freight']; ?></td>
                    <td><?php echo $row['Freight']; ?></td>
                    <td><?php echo $row['RequiredDate']; ?></td>
                </tr>
                <?php endwhile; ?>

                </tbody>
            </table>
        </div>
        <div class="d-flex flex-column align-items-end font-weight-bold">
            <p>Gross Total: $(from data)</p>
            <p class="text-success">Total paid: $(from data)</p>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once("../includes/footer.php"); ?>
    <?php include_once("../includes/scripts.php"); ?>
</body>

<!--library for search and pagination -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script>
    $(".table").DataTable();
</script>

</html>


