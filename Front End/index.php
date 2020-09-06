<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="The homepage of my webspace from which my website can be navigated" />
    <title>Homepage</title>
    <link rel="icon" href="Media/Images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="Media/Images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Scripts/CSS/General.css" />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="packages/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="packages/slick/slick-theme.css"/>

</head>

<!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="packages/jquery-ui/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="packages/slick/slick.min.js"></script>
    <script src="Scripts/Javascript/Index.js" defer></script>
<!-- end of scripts -->

<body id="bodystyle_01">
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto navButton">
                <a href="Index.php"><h1 class="text-center">danielgreenwood.net</h1></a> 
            </div>
        </div>
        <nav class="navbar navbar-expand-sm">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item navButton">
                    <a href="lin_parallax.php"><h2 class="align-middle">Parallax linear</h2></a>
                </li>
                <li class="nav-item navButton">
                    <a href="ran_parallax.php"><h2 class="align-middle">Parallax spread</h2></a>
                </li>
                <li class="nav-item navButton">
                    <a href="about_me.php"><h2 class="align-middle">About</h2></a>
                </li>
            </ul>
        </nav>
    </div>
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="media_carousel slick_H">
                    <a href="lin_parallax.php" class="carousel-Box">
                        <img src="Media/Images//carouselimages/linear_Para.png">
                        <div class="carousel-card">
                            <span class="align-middle text">Linear Parallax</span>
                        </div>
                    </a>
                    
                    <a href="Coming_Soon.php" class="carousel-Box">
                        <img src="Media/Images/CarouselImages/BrainsEdenImage.jpg">
                        <div class="carousel-card">
                            <span class="align-middle text">Fire Watchers</span>
                        </div>
                    </a>

                    <a href="ran_parallax.php" class="carousel-Box">
                        <img src="Media/Images/carouselimages/Random_Para.png">
                        <div class="carousel-card">
                            <span class="align-middle text">Random Parallax</span>
                        </div>
                    </a>

                    <a href="Coming_Soon.php" class="carousel-Box">
                        <img src="Media/Images/CarouselImages/year2-groupproject.jpg">
                        <div class="carousel-card">
                            <span class="align-middle text">Escape The Tower</span>
                        </div>
                    </a>
                </div>
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
