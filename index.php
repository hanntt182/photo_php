<?php
session_start();
if (isset($_GET['view'])) {

    $pages = array("home", "about");
    if (in_array($_GET['view'], $pages)) {
        $_page = $_GET['view'];
    } else {
        $_page = "home";
    }
} else {
    $_page = "home";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="icon" href="assets/img/icon/photo-camera.png">

    <!--Bootstrap v4.1.0 CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>My Photo</title>
</head>
<body>
<div id="container">
    <div id="navbar">
        <?php
        require("views/common/header.php");
        ?>
    </div>
    <div id="sidebar-left"></div>
    <div id="main">
        <div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!--<ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="cover-img d-block w-100" src="assets/img/pineapple-cover.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="cover-img d-block w-100" src="assets/img/annie-spratt-277548-unsplash.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="cover-img d-block w-100" src="assets/img/biel-morro-259739-unsplash.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="search_banner">
                <form class="form-inline">
                    <div class="input-group">
                        <input class="form-control" type="search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <?php
            require ("views/main/".$_page.".php");
            ?>
        </div>
    </div>
</div>


<!--Bootstrap v4.1.0 JS, Popper.js, and jQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>
</html>