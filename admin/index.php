
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="index.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <title>Admin | اضافة منتجات</title>
</head>
<body>


<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

?>
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
                        <li class="nav-item">
                            <a class="nav-link" href="user-order.php"  style="margin-left: 70%;">Users </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="materials.php"  style="margin-left: 100%;">Goods</a>
                        </li>
                    </ul>
                </div>
           
            </div>

        </div>
    </nav>
    <!-- Close Header -->
    <center>
        <div class="main" style="margin-bottom: 40px;" >
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2 style="color: #59ab6e; font-size: 30px;"> المنتجات </h2>
                <img src="22.jpg" alt="logo" width="450px">
                <input placeholder="اسم المنتج" type="text" name='name'>
                <br>
                <input placeholder="السعر" type="text" name='price'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file" > اختيار صورة للمنتج</label>
                <button name='upload'>رفع المنتج ✅</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
    </center>
    <center>
        <div class="main" style="margin-bottom: 40px;" >
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2 style="color: #59ab6e; font-size: 30px;"> الخامات </h2>

                <input placeholder="اسم الخامات" type="text" name='name'>           
                <br>                
                <input placeholder="الكمية" type="number" name='quantity'>
                <br>
                <button name='uploads'>رفع الخامات ✅</button>
                <br><br>
                <a href="materials.php">عرض كل الخامات</a>
            </form>
        </div>


        <?php
      $select_user = mysqli_query($con, "SELECT * FROM `admin` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>
<style>
.delete-btn,
.option-btn{
display: inline-block;
padding:10px 30px;
cursor: pointer;
font-size: 15px;
color:white;
border-radius: 5px;
text-transform: capitalize;
}

.delete-btn:hover
{
background-color: black;
}
.delete-btn{
background-color:red;
}
</style>
   <h3>:اسم الادمن</h3><h5><?php echo $fetch_user['name']; ?></h5>
   <div class="flex">
      <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to log out?');" class="delete-btn">sign out</a>
   </div>

</div>

    </center>

        <!-- Start Footer -->
        <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
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

            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
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
    <script src="../js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/templatemo.js"></script>
    <script src="../js/custom.js"></script>
    <!-- End Script -->
</body>
</html>
