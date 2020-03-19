<?php include('../cust_pages/cust_register_server.php') ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../includes/head.php"); ?>
    <link rel="stylesheet" href="../../css/login.css">
    <title>Customer Registration</title>
</head>

<body class="text-center">
    <div class="main-container">
        <?php include_once("../includes/navbar.php"); ?>

        <!-- CUSTOMER REGISTER CARD -->
        <div class="container my-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card" style="width: 35rem;">
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Create New Customer Account</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" name="newCustomer" id="newCustomer" method="post" action="cust_register_form.php">

                            <!-- Error message -->
                            <?php include('../includes/errors.php'); ?>
                            <!-- Success notification message -->
                            <?php if (isset($_SESSION['success'])) : ?>
                                <div class="error success mt-3" >
                                    <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                    ?>
                                </div>
                            <?php endif ?>

                            <!-- Company Name -->
                            <div class="md-form">
                                <input type="text" id="companyName" name="companyName" class="form-control" placeholder="Company Name *" >
                            </div>

                            <!-- First Name -->
                            <div class="md-form">
                                <input type="text" id="fName" name="fName" class="form-control" placeholder="First Name *" >
                            </div>

                            <!-- Last Name -->
                            <div class="md-form">
                                <input type="text" id="lName" name="lName" class="form-control" placeholder="Last Name *" >
                            </div>

                            <!-- Email -->
                            <div class="md-form">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email *" >
                            </div>

                            <!-- Username -->
                            <div class="md-form">
                                <input type="text" id="regUsername" name="regUsername" class="form-control" placeholder="Username *" required>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="regPwd" name="regPwd" class="form-control" placeholder="Password *" required>
                            </div>

                            <!-- Create an Account button -->
                            <input type="submit" name="reg_user_submit" id="button1" value="Create an Account" class="btn btn-outline-info btn-block my-4" />
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
        <?php include_once("../includes/footer.php"); ?>
    </div>

<?php include_once("../includes/scripts.php"); ?>
</body>
</html>