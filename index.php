<?php
    include './functions/lhoopa.php';

    $conn = OpenCon();

    CloseCon($conn);
?>
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
    <div class="container p-5">
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
                    foreach($all as $row) { ?>
                        <tr>
                            <td class="py-3"><?= $row['id']; ?></td>
                            <td class="py-3"><?= $row['name']; ?></td>
                            <td class="py-3"><?= $row['username']; ?></td>
                            <td class="py-3"><?= $row['email']; ?></td>
                            <td class="py-3"><?= $row['address']; ?></td>
                            <td class="py-3"><?= $row['phone']; ?></td>
                            <td class="py-3"><?= $row['website']; ?></td>
                            <td class="py-3"><?= $row['company']; ?></td>
                            <td class="py-3">
                                <button type="button" class="btn btn-outline-success btn-sm mx-3">Shortlist</button>
                            </td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>