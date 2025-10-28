<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cgmsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success_message = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);

    // Check if the username or email already exists
    $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        $message = "User already exists";
echo "<script>alert('$success_message'); window.location.href = 'signup.html';</script>";
            exit();
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "Registration successful";
            echo "<script>alert('$success_message'); window.location.href = 'signup.html';</script>";
            exit();
        } else {
            $error_message = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
