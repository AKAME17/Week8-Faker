<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('fil_PH'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2;
        }
        .table thead {
            background-color: #ff66b2 !important; 
            color: white;
        }
        .table tbody tr:hover {
            background-color: #ffccdd !important;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #ff3385; 
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Fake User Profiles</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Birthdate</th>
                    <th>Job Title</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < 5; $i++) {
                    echo "<tr>
                            <td>{$faker->name}</td>
                            <td>{$faker->email}</td>
                            <td>+63 {$faker->numerify('9## ### ####')}</td>
                            <td>{$faker->address}</td>
                            <td>{$faker->date('Y-m-d')}</td>
                            <td>{$faker->jobTitle}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
