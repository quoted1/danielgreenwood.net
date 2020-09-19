<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="An interactive webpage displaying a parallax effect coded in Javascript/jQuery" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
    <title>Linear Parallax Effect</title>
    <link rel="icon" href="Media/Images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="Media/Images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="Scripts/CSS/General.css" />
    <link rel="stylesheet" type="text/css" href="Scripts/CSS/ztext_styles.css" />

    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="packages/jquery-ui/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="Scripts/Javascript/lin_Parallax.js" defer></script>

<body id="bodystyle_02">
 <?php include 'Scripts/php/pageParts/header.php'; ?>
    <!-- enter page content here -->
    <div class="outer">
        <div class="centered">
            <img src="Media/Images/Parallax_dots/ParallaxDot_B_07.png" data-speed="5" class="paraImage_lin">
            <img src="Media/Images/Parallax_dots/ParallaxDot_B_06.png" data-speed="3" class="paraImage_lin">
            <img src="Media/Images/Parallax_dots/ParallaxDot_B_05.png" data-speed="2" class="paraImage_lin">
            <img src="Media/Images/Parallax_dots/ParallaxDot_B_04.png" data-speed="1.5" class="paraImage_lin">
            <img src="Media/Images/Parallax_dots/ParallaxDot_B_03.png" data-speed="1.25" class="paraImage_lin">
            <img src="Media/Images/Parallax_dots/ParallaxDot_B_02.png" data-speed="1.125" class="paraImage_lin">
            <img src="Media/Images/Parallax_dots/ParallaxDot_B_01.png" data-speed="1.051125" class="paraImage_lin">
        </div>
        <div class="container-fluid inner">
            <div class="row page-Center">
                <div class="col-sm-3">
                    <a href="ran_parallax.php" class="page-nav-LR">Spread</a>
                </div>
                <div class="col-sm-6">
                    
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid header fixed-bottom">
        <div class="row py-1">
            <div class="col-sm -sm">
                <span class="hText-sm align-middle">2020 danielgreenwood.net</span>
            </div>
            <div class="col-sm -sm ml-auto">
            </div>
        </div>
    </footer>


</body>
</html>
