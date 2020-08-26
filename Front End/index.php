<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="The homepage of my webspace from which my website can be navigated" />
    <title>Homepage</title>
    <link rel="icon" href="media/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="media/images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="scripts/CSS/General.css" />
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
    <script src="scripts/Javascript/Index.js" defer></script>
<!-- end of scripts -->

<body id="bodystyle_01">
    <!--Start of NavBar-->
    <nav class="navbar navbar-expand-sm header fixed-top">
        <a class="navbar-brand hText align-items-center" style="font-size: 26px;" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trees" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>
            <rect x="4" y="3" width="8" height="14" rx="4" />
            <rect x="12" y="7" width="8" height="10" rx="3" />
            <line x1="8" y1="21" x2="8" y2="13" />
            <line x1="16" y1="21" x2="16" y2="14" />
            </svg>
            <span class="align-middle">danielgreenwood.net</span>
        </a>
        <div id="navbarSupportedContent" class="ml-auto">
            <ul class="navbar-nav">

                <li class="nav-item dropdown navItem">
                    <a class="nav-link dropdown-toggle hText" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My work</a>
                    <div class="dropdown-menu dropdown-menu-right dropdownParent" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="ran_Parallax.php">Parallax Effect</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Coming_Soon.php">Coming soon</a>

                    </div>
                </li>

                <li class="nav-item navItem">
                    <a class="nav-link hText" href="About_Me.php" id="" role="button">About</a>
                </li>
               
            </ul>
        </div>
    </nav>
       <!--End of NavBar-->
  
    <div class="container align-middle below-header-far">
        <div class="row">
            <div class="col-sm-12">
                <div class="media_carousel slick_H">
                    <a href="lin_parallax.php" class="carousel-Box">
                        <video autoplay muted loop>
                            <source src="media/Videos/Parallax_linear.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="carousel-card">
                            <span class="align-middle text">Linear Parallax</span>
                        </div>
                    </a>
                    
                    <a href="Coming_Soon.php" class="carousel-Box">
                        <img src="media/Images/CarouselImages/BrainsEdenImage.jpg">
                        <div class="carousel-card">
                            <span class="align-middle text">Fire Watchers</span>
                        </div>
                    </a>

                    <a href="ran_parallax.php" class="carousel-Box">
                        <video autoplay muted loop>
                            <source src="media/Videos/Parallax_random.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="carousel-card">
                            <span class="align-middle text">Random Parallax</span>
                        </div>
                    </a>

                    <a href="Coming_Soon.php" class="carousel-Box">
                        <img src="media/Images/CarouselImages/year2-groupproject.jpg">
                        <div class="carousel-card">
                            <span class="align-middle text">Escape The Tower</span>
                        </div>
                    </a>
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
                <span class="hText-sm align-middle float-right">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></span>
            </div>
        </div>
    </footer>

</body>
</html>
