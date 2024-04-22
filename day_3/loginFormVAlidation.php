<?php


    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $users_file = fopen("users.txt", "r");
    if ($users_file) {
        $authenticated = false;
        while (($line = fgets($users_file)) !== false) {
            $user_data = json_decode($line, true);
            if ($user_data['email'] === $email && $user_data['password'] === $password) {
                $authenticated = true;
                break;
            }
        }
        fclose($users_file);
        if ($authenticated) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['login'] = true;
            $_SESSION['message'] = "Welcome, $email!";
            // var_dump($authenticated);
            header("Location: homepage.php");
            exit();
        } else {
            // var_dump($authenticated);
            header("Location: loginForm.php");
        }
    } else {
        // var_dump($authenticated);
        header("Location: loginForm.php");
    }
    
    






















// // var_dump($_POST);
// $errors = [];
// $old_data = []; 

// $required_fields = ['email', 'password'];

// foreach ($required_fields as $field) {
//     if (empty($_POST[$field])) {
//         $errors[$field] = ucfirst($field) . " is required";
//     }
// }

// if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.com)$/", $_POST['email'])) {
//     $errors['email'] = "invalid email format";
// }

// // if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $_POST['password'])) {
// //     $errors['password'] = "password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number";
// // }
// // //
// // if (!preg_match("/^[a-z0-9_]{8}$/", $_POST['password'])) {
// //     $errors['password'] = "Password must be 8 characters long and contain only lowercase letters, digits, and underscores";
// // }

// //mypasswrd0_
// if (!preg_match("^(?=.*[a-z])(?=.*[0-9])[\w]{8,}$", $_POST['password'])) {
//     $errors['password'] = "Password must be 8 characters long and contain only lowercase letters, digits, and underscores";
// }







// if (empty($errors)) {
//     echo "<h1 style='color: blue'> Data validated successfully </h1>";
//     echo"<img src='https://qvilon.ru/wp-content/uploads/2019/05/peregowory.jpg'>";

// } else {
//     foreach ($errors as $field => $error) {
//         echo "<p>$error</p>";
//         echo "<label style='color: red; font-weight: bold'>$error</label>";
//         $old_data[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
//     }
//     $errors = json_encode($errors);
//     $old_data = json_encode($old_data);
//     if (!empty($old_data)) {
//         $url = "errors={$errors}&old_data={$old_data}";
//     } else {
//         $url = "errors={$errors}";
//     }
//     header("Location: loginForm.php?{$url}");
// }




?>
