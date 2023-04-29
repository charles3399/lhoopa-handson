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

    $select = "SELECT * FROM users;";
    $show = $conn->query($select);

    if($show->num_rows > 0)
    {
        $datas = $show->fetch_all(MYSQLI_ASSOC);
        
        return $datas;
    }
    else
    {
        foreach($json_data as $row) {
            $insert .= "INSERT INTO users(id, name, username, email, address, phone, website, company) VALUES ('".$row['id']."', '".$row['name']."', '".$row['username']."', '".$row['email']."', '".$row['address']['street']."', '".$row['phone']."', '".$row['website']."', '".$row['company']['name']."');";
        }

        $conn->multi_query($insert);

        $datas = $show->fetch_all(MYSQLI_ASSOC);

        return $datas;
    }
