<!DOCTYPE html>
<html lang="en">

<head>
    <title>  Materials | الخامات </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="index.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="indexx.php">
                Carton
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../indexx.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>


	<div class="containera">

		<div class="table">
            <link rel="stylesheet" href="../css/table.css">
			<div class="table-header">
                <div class="header__item" id="wins" class="filter__link filter__link--number" >Name</div>
				<div class="header__item" id="name" class="filter__link" >Quantity</div>
			</div>
            
            <?php
                include('config.php');
                $goods = mysqli_query($con, "SELECT * FROM goods");
                while($good = mysqli_fetch_array($goods))
                {
                    echo
                    "<div class='table-content'>
                    <div class='table-row'>
                    <div class='table-data'>$good[name]</div>
                    <div class='table-data'>$good[quantity]</div>
                    </div><hr>
                </div>";
                }
            ?>
		</div>
	</div>
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container" style="padding-bottom: 0;">
            <div class="row">

            <div class="col-md-8 pt-5">
                <a href="indexx.php"><h2 class="h2 text-success border-bottom pb-3 border-light logo">Carton Shop</h2></a>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Alexandria,Mandara
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">01286495556</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">alinassar@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a href="index.php" class="text-decoration-none" >Rectangular</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Square</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Cubic</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Parallel</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Polygon</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Tomatoes</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Equilateral</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Small</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Meals</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Zigzag</a></li>
                        <li><a href="index.php" class="text-decoration-none" >Present</a></li>
                    </ul>
                </div>
            </div>
            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <center>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                </center>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container" style="padding-bottom: 0;">
                <div class="row pt-2">
                    <div class="col-12">
                    <center> <p class="text-left text-light">
                            Copyright &copy; 2024 Carton 
                        </p></center>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/templatemo.js"></script>
    <script src="../js/custom.js"></script>
    <!-- End Script -->

</body>

</html>
