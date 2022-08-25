<?php
//connect to db
if ($db_url = getenv("CLEARDB_DATABASE_URL")) {
    $url = parse_url($db_url);
    $server = $url["host1"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    $conn = new mysqli($server, $username, $password, $db);
    echo "connected to cleardb";
} else {
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "workout-app";
    $conn = new mysqli($server, $username, $password, $db);
    echo "connected to local host db";
}

//check connection
if (mysqli_connect_errno()) {
    //connection has failed
    echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
}
