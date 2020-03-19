<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../includes/head.php"); ?>
    <link rel="stylesheet" href="../../css/login.css">
    <title>Sales Login</title>
</head>

<header>
</header>

<body class="text-center">
    <div class="main-container">

        <?php include_once("../includes/navbar.php"); ?>

        <!-- SALES LOGIN CARD -->
        <div class="container mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card" style="width: 22rem;">
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Sales Login</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" name="loginForm" id="loginForm" method="post" action="../sales_pages/sales_checkLogin.php">

                            <!-- Username -->
                            <div class="md-form">
                                <input type="text" id="loginSalesUser" name="loginSalesUser" class="form-control" placeholder="Username" required>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="loginSalesPwd" name="loginSalesPwd" class="form-control" placeholder="Password" required>
                            </div>

                            <!-- Login button -->
                            <input type="submit" name="submit" id="button1" value="Login" class="btn btn-outline-info btn-block my-4" />
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