<?php
require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #ffe6f2; }
        .table thead { background: #ff66b2 !important; color: white; }
        .table tbody tr:hover { background: #ffccdd !important; }
        .container { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h2 { color: #ff3385; }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Fake User Accounts</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <?php foreach (["User ID (UUID)", "Full Name", "Email", "Username", "Password (SHA-256)", "Account Created"] as $header) {
                        echo "<th>$header</th>";
                    } ?>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <?php 
                        $email = $faker->email;
                        $username = explode("@", $email)[0];
                        $password = hash('sha256', $faker->password);
                    ?>
                    <tr>
                        <td><?= $faker->uuid ?></td>
                        <td><?= $faker->name ?></td>
                        <td><?= $email ?></td>
                        <td><?= $username ?></td>
                        <td><?= $password ?></td>
                        <td><?= $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s') ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
