<?php
require_once "db_connection.php";

$std_id = $_GET['id'];

try {
    $con = dbConnection();

    $delete_query = "DELETE FROM os_students WHERE id = :id";
    $prepared_statement = $con->prepare($delete_query);
    $prepared_statement->bindParam(':id', $std_id, PDO::PARAM_INT);
    $res = $prepared_statement->execute();
    if ($prepared_statement->rowCount() == 1) {
        echo "<h3 style='color:green'>Student Deleted Succcessfully</h3>";
    }
    header("Location:db_select.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
