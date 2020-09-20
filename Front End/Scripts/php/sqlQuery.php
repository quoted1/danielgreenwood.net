<?php
    include 'Scripts/php/dbh.php';

    $query_01 = "SELECT * FROM Users WHERE Username = 'Admin'";
    if ($result = mysqli_query($conn, $query_01)) {
        $row = mysqli_fetch_array($result);
        echo "<p>Email - ".$row[Email]." | Username - ".$row[Username]."</p>";
    }

    $query_03 = "INSERT INTO `Users` (`Email`, `Username`, `Password`) VALUES('dangreenwood@zoho.com', 'dgwood', 'Password123')";

    $query_04 = "UPDATE Users SET Email = 'd.greenwood@pitchero.com' WHERE Username = 'dgwood'";

    function chk_username(){
        $stmt = $conn->prepare("SELECT * FROM Users WHERE Username = ?");
        $stmt->bind_param('s', $_POST['emailUsername']);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
        $stmt->fetch();
        $stmt->close();
    }

    function log_in(){
        echo $_POST['emailUsername'];
    }
?>