<?php

echo "<h1 style='color: blue'>Welcome to lab2 validation of register form </h1>";
var_dump($_POST);
$errors = [];
$old_data = []; 

$required_fields = ['firstname', 'lastname', 'address', 'age', 'track', 'email', 'password'];

foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        $errors[$field] = ucfirst($field) . " is required";
    }
    // else {
    //     $old_data[$field] = $_POST[$field];
    // }
}
if (empty($errors)) {
    echo "<h1> data validated successfully </h1>";
    var_dump($_POST);
    $data = json_encode($_POST);
    $res = save_data($data.PHP_EOL, "users.txt");
    var_dump($res);
    display_data_in_table("users.txt");
} else {
    foreach ($errors as $field => $error) {
        echo "<p>$error</p>";
        echo "<label style='color: red; font-weight: bold'>$error</label>";
        $old_data[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }
    $errors = json_encode($errors);
    $old_data = json_encode($old_data);
    if (!empty($old_data)) {
        $url = "errors={$errors}&old_data={$old_data}";
    } else {
        $url = "errors={$errors}";
    }
    header("Location: myappForm.php?{$url}");
}


function save_data($data, $filename)
{
    $fileobj = fopen($filename, "a");
    $res = fwrite($fileobj, $data);
    fclose($fileobj);
    return $res;
}


function display_data_in_table($filename)
{
    echo "<div class='container bg-dark'>";
    echo "<h2>User Data</h2>";
    echo "<table class='table table-bordered'>";
    echo "<thead class='table-dark'>";
    echo "<tr>";
    foreach (['firstname', 'lastname', 'address', 'age', 'track', 'email'] as $field) {
        echo "<th scope='col'>" . ucfirst($field) . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $file_data = file($filename);
    foreach ($file_data as $line) {
        $info = json_decode($line, true);
        echo "<tr>";
        foreach (['firstname', 'lastname', 'address', 'age', 'track', 'email'] as $field) {
            echo "<td>{$info[$field]}</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}


?>





