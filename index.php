<?php
    $servername = $_ENV['MYSQLDB_PORT_3306_TCP_ADDR'];
    $username = "root";
    $password = $_ENV['MYSQLDB_ENV_MYSQL_ROOT_PASSWORD'];
    $dbname = "sampledb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO submissions (vendor, ingredient) VALUES ('nike', 'rubber')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>