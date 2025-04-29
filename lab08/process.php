<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Define another username and password
$friend_username = "friend's_name"; // Replace with your friend's name
$friend_password = "friend's_password"; // Replace with your friend's password

if ($username == 'HIEUTHUBA' && $password == 'giahieu090806') {
    $_SESSION['user'] = $username;
    $_SESSION['user_type'] = 'self'; // Identify the user as yourself
    header('Location: welcome.php');
    exit();
} elseif ($username == $friend_username && $password == $friend_password) {
    $_SESSION['user'] = $friend_username;
    $_SESSION['user_type'] = 'friend'; // Identify the user as your friend
    header('Location: welcome.php');
} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>