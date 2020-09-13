<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="This webpage is in development and is coming soon" />

    <title>Coming Soon</title>

    <link rel="icon" href="Media/Images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="Media/Images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Scripts/CSS/General.css" />
    <link rel="stylesheet" type="text/css" href="Scripts/CSS/ztext_styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>
<body id="bodystyle_05">
 <!--Start of NavBar-->
    <nav class="navbar navbar-expand-sm header fixed-top">
        <a class="navbar-brand hText align-items-center" href="index.php">
            <span class="ztext_t_sm" >danielgreenwood.net</span>
        </a>
        <div id="navbarSupportedContent" class="ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item dropdown navItem">
                    <a class="nav-link dropdown-toggle hText ztext_p_md" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My work</a>
                    <div class="dropdown-menu dropdown-menu-right dropdownParent" aria-labelledby="navbarDropdown">
                        <a class="ztext_p_sm" href="ran_Parallax.php">Parallax Effect</a>
                        <div class="dropdown-divider"></div>
                        <a class="ztext_p_sm" href="Coming_Soon.php">Coming soon</a>
                    </div>
                </li>

                <li class="nav-item navItem">
                    <a class="nav-link hText ztext_p_md" href="About_Me.php" id="" role="button">About</a>
                </li>
               
            </ul>
        </div>
    </nav>
<!--End of NavBar-->
    <div class="container">
        <form class="below-header-close ">
            <div class="col-lg">
                <div class="row justify-content-center">
                    <p class="text-center ztext_t_md">Heading</p>
                </div>
                <div class="row justify-content-center">
                    <input type="" name=""/>
                </div>
            </div>
        </form>
    </div>
    <?php
        $host_name = 'db5000823181.hosting-data.io';
        $database = 'dbs728901';
        $user_name = 'dbu675406';
        $password = 'hcWa5NVCP7IlG$u';
        $conn = mysqli_connect($host_name, $user_name, $password, $database);

        if (mysqli_connect_errno()) {
            die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
        } else {
            echo '<p>Connection to MySQL server successfully established.</p >';
        }

        $query = "SELECT * FROM Users";

        if ($result = mysqli_query($conn, $query)) {
            $row = mysqli_fetch_array($result);
            print_r($row);
        }
        


    ?>

    <footer class="container-fluid header fixed-bottom">
        <div class="row py-1">
            <div class="col-sm">
                <span class="hText align-middle">2020 danielgreenwood.net</span>
            </div>
        </div>
    </footer>

</body>
<!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="packages/jquery-ui/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- <script src="Scripts/php/dbh.php"></script> This line is hidden until the db connection is linked externally -->
<!-- end of scripts -->
</html>
