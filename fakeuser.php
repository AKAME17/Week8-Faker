<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('fil_PH'); // Set to Filipino locale

echo "<h2>Fake User Profiles</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Birthdate</th>
        <th>Job Title</th>
      </tr>";

for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    echo "<td>" . $faker->name . "</td>";
    echo "<td>" . $faker->email . "</td>";
    echo "<td>+63 " . $faker->numerify("9## ### ####") . "</td>";
    echo "<td>" . $faker->address . "</td>";
    echo "<td>" . $faker->date('Y-m-d') . "</td>";
    echo "<td>" . $faker->jobTitle . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
