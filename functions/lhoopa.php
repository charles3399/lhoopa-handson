<?php
function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lhoopa";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die('Could not connect: ' . mysql_error());

    $data = file_get_contents('https://jsonplaceholder.typicode.com/users');
    $json_data = json_decode($data, true);

    foreach($json_data as $row) {
        $id = $row['id'];
        $name = $row['name'];
        $username = $row['username'];
        $email = $row['email'];
        $address = $row['address']['street'];
        $phone = $row['phone'];
        $website = $row['website'];
        $company = $row['company']['name'];

        $sql = "INSERT INTO users(id, name, username, email, address, phone, website, company)
        VALUES('$id', '$name', '$username', '$email', '$address', '$phone', '$website', '$company')";
    }

    if(!mysqli_query($conn, $sql))
    {
        die('Error');
    }

    $select = "SELECT * FROM users";
    $res = mysqli_query($conn, $select);
    $all = $re->fetch_all(MYSQLI_ASSOC);

    if ($res->num_rows > 0) {
        while($all) {
            return $all;
        }
    }

    return $conn;
}
 
function CloseCon($conn) {
     $conn -> close();
}