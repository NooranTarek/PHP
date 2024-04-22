<?php
session_start();
unset($_SESSION['login']);
setcookie("PHPSESSID", "", time() - 3600, "/", "", 0);
session_destroy();

echo "<div style='margin: 20px; padding: 10px; background-color: green; border: 1px solid #ccc; border-radius: 5px;'>";
echo "<h3 style='color:white;margin-bottom: 10px;'>Logged out successfully</h3>";
echo "</div>";
echo "<a style='color:green;margin-left: 20px;border:none; border-radius:5px;font-weight:bolder;font-size:20px' href='loginForm.php' >Back to Login</a>";

?>