<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "lhoopa";
    $table_data = "";
    $insert = "";
    $data = file_get_contents('https://jsonplaceholder.typicode.com/users');
    $json_data = json_decode($data, true);

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    foreach($json_data as $row) {
        $insert .= "INSERT INTO users(id, name, username, email, address, phone, website, company) VALUES ('".$row['id']."', '".$row['name']."', '".$row['username']."', '".$row['email']."', '".$row['address']['street']."', '".$row['phone']."', '".$row['website']."', '".$row['company']['name']."');";

        $table_data .= "
            <tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['username']."</td>
                <td>".$row['email']."</td>
                <td>".$row['address']['street']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['website']."</td>
                <td>".$row['company']['name']."</td>
                <td><button type='button' class='btn btn-outline-success btn-sm'>Shortlist</button></td>
            </tr>
        ";
    }

    if($conn->multi_query($insert) === FALSE)
    {
        echo "Error: " . $conn->error;
    }
    else {
        return $table_data;
    }

    $conn->close();