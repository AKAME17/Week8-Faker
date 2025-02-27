

<?php
require 'vendor/autoload.php';


$host = 'localhost';
$dbname = 'demo_database';
$username = 'root'; 
$password = 'root'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Connected to database successfully!<br>";
} catch (PDOException $e) {
    die(" Connection failed: " . $e->getMessage());
}


$faker = Faker\Factory::create('en_PH');


echo "Seeding Office Data...<br>";
for ($i = 0; $i < 50; $i++) {
    $stmt = $pdo->prepare("INSERT INTO office (name, contactnum, email, address, city, country, postal) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $faker->company,
        $faker->phoneNumber,
        $faker->email,
        $faker->streetAddress, 
        $faker->city,
        'Philippines',
        $faker->postcode
    ]);
}
echo " Office Data Inserted!<br>";


$office_ids = $pdo->query("SELECT id FROM office")->fetchAll(PDO::FETCH_COLUMN);


echo "Seeding Employee Data...<br>";
for ($i = 0; $i < 200; $i++) {
    $stmt = $pdo->prepare("INSERT INTO employee (lastname, firstname, office_id, address) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $faker->lastName,
        $faker->firstName,
        $faker->randomElement($office_ids), 
        $faker->streetAddress 
    ]);
}
echo " Employee Data Inserted!<br>";


$employee_ids = $pdo->query("SELECT id FROM employee")->fetchAll(PDO::FETCH_COLUMN);


echo "Seeding Transaction Data...<br>";
for ($i = 0; $i < 500; $i++) {
    $stmt = $pdo->prepare("INSERT INTO transaction (employee_id, office_id, datelog, action, remarks, documentcode) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $faker->randomElement($employee_ids), 
        $faker->randomElement($office_ids),   
        $faker->dateTimeThisDecade()->format('Y-m-d'), 
        $faker->word(),
        $faker->sentence(), 
        strtoupper($faker->bothify('DOC###??')) 
    ]);
}
echo " Transaction Data Inserted!<br>";

echo "<br> Seeding Completed Successfully!";
?>
