<?php include './functions/lhoopa.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Hands-on Exam</title>
</head>
<body>
    <div class="container p-5 text-center">
        <h1>List of users</h1>
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Website</th>
                    <th>Company</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo $table_data;
                ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>