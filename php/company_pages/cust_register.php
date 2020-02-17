<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../includes/head.php"); ?>
    <link rel="stylesheet" href="../../css/login.css">
    <title>Customer Registration</title>
</head>

<!--<header>-->
<!--</header>-->

<body class="text-center">
<?php include_once("../includes/navbar.php"); ?>
    <h3 class="my-4">
        <a href="../../index.php"><strong>KOBAYASHI</strong></a>
    </h3>

    <!-- CUSTOMER REGISTER CARD -->
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width: 35rem;">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Create New Customer Account</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" name="newCustomer" id="newCustomer" method="post" action="register.php">
                        <!-- Company Name -->
                        <div class="md-form">
                            <input type="text" id="companyName" name="companyName" class="form-control" placeholder="Company Name *" required>
                        </div>

                        <!-- First Name -->
                        <div class="md-form">
                            <input type="text" id="fName" name="fName" class="form-control" placeholder="First Name *" required>
                        </div>

                        <!-- Last Name -->
                        <div class="md-form">
                            <input type="text" id="lName" name="lName" class="form-control" placeholder="Last Name *" required>
                        </div>

                        <!-- Email -->
                        <div class="md-form">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email *" required>
                        </div>

                        <!-- Username -->
                        <div class="md-form">
                            <input type="text" id="loginUser" name="loginUser" class="form-control" placeholder="Username *">
                        </div>

                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" id="loginPwd" name="loginPwd" class="form-control" placeholder="Password *" required>
                        </div>

                        <!-- Login button -->
                        <input type="submit" name="submit" id="button1" value="Create an Account" class="btn btn-outline-info btn-block my-4" />
                    </form>
                </div>
            </div>
        </div>
    </div>

<!--    <p class="mt-5 mb-3 text-muted">Copyright &copy; 2020, KOBAYASHI.</p>-->
<!-- FOOTER -->
<?php include_once("../includes/footer.php"); ?>
<?php include_once("../includes/scripts.php"); ?>
</body>
</html>