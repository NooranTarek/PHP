<?php
require_once "db_connection.php";

function inserUsers(){
    try{
        if(isset($_POST['name'], $_POST['email'], $_POST['track'], $_POST['grade'])) {
            $std_name = $_POST['name'];
            $std_email = $_POST['email'];
            $std_track = $_POST['track'];
            $std_grade = $_POST['grade'];

            $con = dbConnection();
            if (!$con) {
                die("Error: Unable to connect to the database");
            }

            $insert_query = "INSERT INTO os_students (`name`, `email`, `track`, `grade`) 
                             VALUES (:stdname, :stdemail, :stdtrack, :stdgrade)";
            $prepared_statement = $con->prepare($insert_query);
            $prepared_statement->bindParam(':stdname', $std_name);
            $prepared_statement->bindParam(':stdemail', $std_email);
            $prepared_statement->bindParam(':stdtrack', $std_track);
            $prepared_statement->bindParam(':stdgrade', $std_grade);

            $execution = $prepared_statement->execute();

            if ($execution){
                header("Location: db_select.php");
                display_data(); 
            }
        } 
    } catch (PDOException $error){
        echo $error->getMessage();
    }
}

inserUsers();
// action="<?php echo $std_id ? 'db_update.php' : 'db_insert.php'; 

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div style="max-width: 400px; margin: 0 auto;">
    <h2>Add Student</h2>
    <form method="POST"?>
        <div style="margin-bottom: 15px;">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($student['name']) ? $student['name'] : ''; ?>">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($student['email']) ? $student['email'] : ''; ?>">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="grade">Grade:</label>
            <input type="text" class="form-control" id="grade" name="grade" value="<?php echo isset($student['grade']) ? $student['grade'] : ''; ?>">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="track">Track:</label>
            <input type="text" class="form-control" id="track" name="track" value="<?php echo isset($student['track']) ? $student['track'] : ''; ?>">
        </div>
        <button type="submit" class="btn btn-primary">add</button>
    </form>
</div>



</body>
</html>