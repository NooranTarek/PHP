<?php

require_once "db_connection.php";

if(isset($_GET['id'])) {
    $std_id = $_GET['id'];

    try {
        $con = dbConnection();
        $select_query = 'SELECT * FROM os_students WHERE id = :id';
        $prepared_statement = $con->prepare($select_query);
        $prepared_statement->bindParam(':id', $std_id, PDO::PARAM_INT);
        $execution = $prepared_statement->execute();
        if ($execution) {
            $student = $prepared_statement->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if(isset($_POST['id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $grade = $_POST['grade'];
    $track = $_POST['track'];
    try {
        $con = dbConnection();
        $update_query = "UPDATE os_students SET name = :name, email = :email, grade = :grade, track = :track WHERE id = :id";
        $prepared_statement = $con->prepare($update_query);
        $prepared_statement->bindParam(':name', $name, PDO::PARAM_STR);
        $prepared_statement->bindParam(':email', $email, PDO::PARAM_STR);
        $prepared_statement->bindParam(':grade', $grade, PDO::PARAM_INT);
        $prepared_statement->bindParam(':track', $track, PDO::PARAM_STR);
        $prepared_statement->bindParam(':id', $std_id, PDO::PARAM_INT);
        $res = $prepared_statement->execute();
        if ($res) {
            echo "<h3 style='color:green'>Student Updated Successfully</h3>";
        }
        header("Location: db_select.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
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
    <h2>Edit Student</h2>
    <form method="POST" ?>
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
        <input type="hidden" name="id" value="<?php echo isset($std_id) ?>">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>



</body>
</html>
