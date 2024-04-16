<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Form Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $track = $_POST['track'];
    $email = $_POST['email'];

    echo "<div class='container'>";
    echo "<h2 class='mt-5'>Submitted Form Data</h2>";
    echo "<p>First Name: $firstname</p>";
    echo "<p>Last Name: $lastname</p>";
    echo "<p>Address: $address</p>";
    echo "<p>City: $city</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Track: $track</p>";
    echo "<p>Email: $email</p>";
    echo "</div>";
    ?>
</body>
</html>
