<?php
    require('cust_isLoggedIn.php');
    checkIfCustLoggedIn();

    include("../includes/dbConn.php");
    $conn = connectToDB();

    $limit = 100;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $result = $conn->query("SELECT * FROM Orders LIMIT $start, $limit");
    $inquiries = $result->fetch_all(MYSQLI_ASSOC);

    $result1 = $conn->query("SELECT count(OrderID) AS OrderID FROM Orders");
    $custCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $custCount[0]['OrderID'];
    $pages = ceil( $total / $limit );

    $Previous = $page - 1;
    $Next = $page + 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("../includes/head.php"); ?>
    <link rel="stylesheet" href="../../css/cust_admin.css">
    <title>Customer Inquiries</title>
</head>

<body>
    <!-- HEADER -->
    <?php include_once("cust_navbar_admin.php"); ?>

    <div class="container my-5">
        <h2>Inquiries</h2>
        <hr>
        <div class="my-4">
            <a href="cust_inquiries.php">Current Inquiries</a>  |
            <a href="cust_new_inquiry.php">New Inquiry</a>
        </div>

        <!-- PAGINATION -->
        <div class="container well">
            <div class="row">
                <div class="col-md-10 pl-0">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                                <a class="page-link" href="cust_inquiries.php?page=<?= $Previous; ?>" aria-label="Previous">Previous</a>
                            </li>
                            <?php for($i = 1; $i<= $pages; $i++) : ?>
                                <li class="page-item <?php if($page == $i){ echo 'active'; } ?>">
                                    <a class="page-link" href="cust_inquiries.php?page=<?= $i; ?>"><?= $i; ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item <?php if($page == $pages){ echo 'disabled'; } ?>">
                                <a class="page-link" href="cust_inquiries.php?page=<?= $Next; ?>" aria-label="Next">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-sm table-hover table-condensed table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Inquiry #</th>
                        <th>Status</th>
                        <th>Date Submitted</th>
                        <th>Submitted By</th>
                        <th>Representative</th>
                        <th>Title</th>
                        <th>Responces</th>
                    </tr>
                </thead>
                <tbody>
                    <!--        Here goes the data-->
                    <?php foreach($inquiries as $inquiry) :  ?>
                        <tr>
                            <td><?= $inquiry['OrderID']; ?></td>
                            <td><?= $inquiry['CustomerID']; ?></td>
                            <td><?= $inquiry['OrderDate']; ?></td>
                            <td><?= $inquiry['RequiredDate']; ?></td>
                            <td><?= $inquiry['CustomerID']; ?></td>
                            <td><?= $inquiry['ShipName']; ?></td>
                            <td><?= $inquiry['Freight']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once("../includes/footer.php"); ?>
    <?php include_once("../includes/scripts.php"); ?>
</body>

</html>



