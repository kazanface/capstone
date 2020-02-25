<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once("./php/includes/head.php"); ?>
    <link rel="stylesheet" href="./css/style.css">
    <title>Kobayashi</title>
</head>

<body>
    <!-- HEADER -->


    <?php include_once("./php/includes/navbar.php"); ?>

  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-left">
              <div class="row">
                  <div class="col-md-8">
                      <h1 class="display-4 font-weight-bold">Cybersecurity and Enterprise Risk </h1>
                      <p class="lead">
                          Your customers trust you. Who do you trust?
                      </p>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-left mb-5">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4 font-weight-bold">Cybersecurity Reports</h1>
                        <p class="lead">
                            Ask as about the State of Cybersecurity Report 2019
                        </p>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-left">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4 font-weight-bold">Award Winning Company</h1>
                        <p class="lead">
                            NelsonHall named us a Leader in security services in its NEAT Report. — June 2019
                        </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

    <!-- HOME HEADER -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="font-weight-bold mb-5">We’re Revolutionizing Cybersecurity</h1>
                </div>
                <div class="col-md-10">
                    <p class="home-p-20">As the world leader in cybersecurity solutions, Kobayashi combines machine learning
                        with human intelligence to detect faster, respond smarter, and predict and prevent more threats altogether.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- HOME CARDS -->
    <section>
        <div class="container">
        <div class="row mb-4">

            <div class="col-md-4 mb-4">
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="/img/home_card1.jpg" class="card-img-top" alt="">
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">Helping You Secure Human Progress</h4>
                        <p class="card-text">By combining the power of advanced analytics with the security expertise and experience
                            of our teams, we enable you to focus more on what matters.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="/img/home_card2.jpg" class="card-img-top" alt="">
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">Unmatched Intelligence, Unmatched Expertise</h4>
                        <p class="card-text">Only Kobayshi brings 20 years of industry knowledge, advanced analytics, world-leading
                            threat intelligence and the network effect of over 4000 clients.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="/img/home_card3.jpg" class="card-img-top" alt="">
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">Now—We’re Putting the Power in Your Hands</h4>
                        <p class="card-text">We’re proud to introduce Kobayashi™ Threat Detection and Response, the first in a suite of
                            applications that puts our intelligence and expertise in your hands.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- HOME Securing Your Critical Business Setup -->
    <section class="business-setup py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="font-weight-bold mb-5">Securing Your Critical Business Setup</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <p>In this digital age, securing systems is one of the biggest risks facing all businesses. Security threats are increasing in frequency and potency, and leading companies worldwide face a tough challenge to invest in security as new use cases emerge in a constantly changing IT landscape.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>You need a simplified, standardized, future-ready enterprise security environment. With proven experience and a wide range of solutions and services, we can help you secure your enterprise. See how we can help you build, integrate or modernize your security infrastructure to keep your business running efficiently, effectively and affordably.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-stats">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-5">Key Stats</h2>
                </div>
            <div class="row">

                <div class="col-md-3 mb-4 text-center">
                    <img src="/img/home_icon_globe.png" class="home-img-stats" alt="">
                    <h3 class="home-h3-stats mt-3">4,100</h3>
                    <p class="home-p-stats">Customers in 50+ Countries</p>
                </div>

                <div class="col-md-3 mb-4 text-center">
                    <img src="/img/home_icon_security.png" class="home-img-stats" alt="">
                    <h3 class="home-h3-stats mt-3">Up to 310B</h3>
                    <p class="home-p-stats">Security Events Processed Daily</p>
                </div>

                <div class="col-md-3 mb-4 text-center">
                    <img src="/img/home_icon_signature.png" class="home-img-stats" alt="">
                    <h3 class="home-h3-stats mt-3">300+</h3>
                    <p class="home-p-stats">Expert Security Analysts, Researchers and Responders</p>
                </div>

                <div class="col-md-3 mb-4 text-center">
                    <img src="/img/home_icon_bars.png" class="home-img-stats" alt="">
                    <h3 class="home-h3-stats mt-3">20+</h3>
                    <p class="home-p-stats">Years of Attack and Threat Actor Group Data</p>
                </div>

            </div>
        </div>
    </section>


  <!-- FOOTER -->
  <?php include_once("./php/includes/footer.php"); ?>



    <?php include_once("./php/includes/scripts.php"); ?>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Configure Slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

  </script>
</body>

</html>