<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="An interactive webpage displaying a parallax effect coded in Javascript/jQuery" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
    <title>Random Parallax Effect</title>
    <link rel="icon" href="media/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="media/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="scripts/CSS/General.css" />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="packages/jquery-ui/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="scripts/Javascript/ran_Parallax.js" defer></script>

<body id="bodystyle_02">
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
    <!-- enter page content here -->
    <div class="outer">
        <div class="centered">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_07.png" data-speed="-3" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_07a.png"  data-speed="4" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_06.png" data-speed="1" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_06a.png"  data-speed="10" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_05.png" data-speed="-2" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_05a.png"  data-speed="-1" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_04.png" data-speed="-10" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_04a.png"  data-speed="3" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_03.png" data-speed="5" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_03a.png"  data-speed="-7" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_02.png" data-speed="-1" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_02a.png"  data-speed="2" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_01.png" data-speed="-1" class="paraImage">
            <img src="media/Images/Parallax_Dots_Random/ParallaxDot_A_01a.png"  data-speed="2" class="paraImage">
        </div>
        <div class="container-fluid inner">
            <div class="row page-Center">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    
                </div>
                <div class="col-sm-3">
                    <a href="lin_parallax.php" class="page-nav-LR">Linear</a>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
