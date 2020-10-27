<?php
    include 'Scripts/php/dbh.php';

    $query_01 = "SELECT * FROM Users WHERE Username = 'Admin'";
    if ($result = mysqli_query($conn, $query_01)) {
        $row = mysqli_fetch_array($result);
        echo "<p>Email - ".$row[Email]." | Username - ".$row[Username]."</p>";
    }

    $query_02 = "SELECT * FROM Users WHERE Username = 'dgwood'";

    $query_03 = "INSERT INTO `Users` (`Email`, `Username`, `Password`) VALUES('dangreenwood@zoho.com', 'dgwood', 'Password123')";

    $query_04 = "UPDATE Users SET Email = 'd.greenwood@pitchero.com' WHERE Username = 'dgwood'";

function chk_dgwood(){
    $result = mysqli_query($conn, $query_02);
    $row = mysqli_fetch_array($result);
    if ($row[Email] != "") {
        if ($row[Email] == "dangreenwood@zoho.com") {
            echo "<p>Email = dangreenwood@zoho.com, Updating to d.greenwood@pitchero.com</p>";
            mysqli_query($conn, $query_04);
        } else {
            echo "<p>Email = d.greenwood@pitchero.com, no need to change anything</p>";
        }
    } else {
        echo "<p>No User called <strong>dgwood</strong>, adding now</p>";
        mysqli_query($conn, $query_03);
    }
}
?>