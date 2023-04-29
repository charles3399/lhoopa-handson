<?php
function shortlist($id) {
    $query = "UPDATE users SET shortlist = 1 WHERE id = $id";

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "lhoopa";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        $conn->query($query);
    }
}

function dd($data, $die = true) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    $die ? die() : null;
}

if(isset($_POST['shortlist'])) {
    shortlist($_POST['id']);

    echo $_POST['name']." (".$_POST['id'].") has been shortlisted";
}