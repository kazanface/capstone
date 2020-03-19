<header>
    <nav class="navbar navbar-expand-md fixed-top-sm justify-content-start flex-nowrap bg-dark navbar-dark">
        <div class="container">
            <a href="cust_orders.php" class="navbar-brand">
                <img src="/img/logo_white_gradient.png" height="40" alt="Kobayashi logo">
            </a>
            <ul class="navbar-nav flex-row mr-auto">
                <li class="nav-item">
                    <span class="navbar-text text-white font-weight-bold">
                        Admin
                    </span>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form name="LogoutForm" action="../includes/logOut.php" method="post">
                    <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit" name="logoutButton" value="Log Out">
                        Log out
                    </button>
                </form>
            </ul>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <div class="container">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="cust_orders.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cust_inquiries.php">Inquiries</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

