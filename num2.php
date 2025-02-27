<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');
$genres = ["Fiction", "Mystery", "Science Fiction", "Fantasy", "Romance", "Thriller", "Historical", "Horror"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boor Records</title>
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
            color: #ff3385; /* Pink title */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Fake Books List</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Publication Year</th>
                    <th>ISBN</th>
                    <th>Summary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < 15; $i++) {
                    echo "<tr>
                            <td>{$faker->sentence(3)}</td> 
                            <td>{$faker->name}</td>
                            <td>{$genres[array_rand($genres)]}</td>
                            <td>{$faker->numberBetween(1900, 2024)}</td>
                            <td>{$faker->isbn13}</td>
                            <td>{$faker->paragraph(1)}</td>
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
