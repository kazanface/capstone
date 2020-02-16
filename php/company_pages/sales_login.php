<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
    <link href="/css/login.css" rel="stylesheet">
    <title>Sales Login</title>
</head>

<header>
</header>

<body class="text-center">
    <h3 class="my-5">
        <a href="../../index.php"><strong>KOBAYASHI</strong></a>
    </h3>

    <!-- SALES LOGIN CARD -->
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width: 22rem;">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Sales Login</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" name="loginForm" id="loginForm" method="post" action="checkSalesLogin.php">

                        <!-- Username -->
                        <div class="md-form">
                            <input type="text" id="loginUser" name="loginUser" class="form-control" placeholder="Username">
                        </div>

                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" id="loginPwd" name="loginPwd" class="form-control" placeholder="Password">
                        </div>

                        <!-- Login button -->
                        <input type="submit" name="submit" id="button1" value="Login" class="btn btn-outline-info btn-block my-4" />
                    </form>
                </div>
             </div>
        </div>
    </div>
    <p class="mt-5 mb-3 text-muted">Copyright &copy; 2020, KOBAYASHI.</p>
</body>
</html>