<?php include './functions/lhoopa.php'; ?>
<?php include './functions/shortlist.php'; ?>
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
                <?php foreach($datas as $data): ?>
                    <tr style="background-color: <?= $data['shortlist'] == 1 ? 'cyan' : 'none' ?>;">
                        <td><?= $data['id']; ?></td>
                        <td><?= $data['name']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['address']; ?></td>
                        <td><?= $data['phone']; ?></td>
                        <td><?= $data['website']; ?></td>
                        <td><?= $data['company']; ?></td>
                        <?php if(!$data['shortlist']): ?>
                            <td>
                                <form action="./functions/shortlist.php" method="post">
                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                    <input type="hidden" name="name" value="<?= $data['name']; ?>">
                                    <input type="hidden" name="username" value="<?= $data['username']; ?>">
                                    <button type='submit' name="shortlist" class='btn btn-success btn-sm'>Shortlist</button>
                                </form>
                            </td>
                        <?php else: ?>
                            <td>
                                <button class='btn btn-default disabled btn-sm'>Shortlisted</button>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>