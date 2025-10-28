<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: signup.php"); // Redirect to the login page if the user is not logged in
    exit();
}

$username = $_SESSION['username'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Options after Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url("img/header.gif");
        background-size: cover;
        margin: 0;
        position: relative;
    }
    #options {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: transparent;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .option {
        width: 200px;
        margin-bottom: 10px;
        padding: 15px 20px;
        border: 2px solid #0077B5;
        border-radius: 5px;
        background-color: #0077B5;
        color: #fff;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.5s;
        transform-style: preserve-3d;
        position: relative;
        overflow: hidden;
    }
    .option::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
        transform: skewX(-45deg);
    }
    .option:hover::before {
        left: 100%;
        transition: left 0.5s;
    }
    .option:hover {
        background-color: #005580;
    }
    .logout {
        margin-top: 20px;
        padding: 10px 20px;
        border: 2px solid #ff3b30;
        border-radius: 5px;
        background-color: #ff3b30;
        color: #fff;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .logout:hover {
        background-color: #cc2e25;
    }
    .welcome-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 2em;
        z-index: 1000;
    }
    .username-display {
        position: fixed;
        top: 10px;
        right: 20px;
        color: #fff;
        background-color: #81afeb;
        padding: 10px 20px;
        border-radius: 10px;
        z-index: 1001;

    }
</style>
</head>
<body>
<div id="welcomeOverlay" class="welcome-overlay">
    <p>Welcome, <?php echo htmlspecialchars($username); ?>!</p>
</div>

<div class="username-display">
    Logged in as: <?php echo htmlspecialchars($username); ?>
</div>

<div id="options">
    <a href="resume.html" class="option">Resume Builder</a>
    <a href="aptitudetest.html" class="option">Aptitude Tests</a>
    <a href="collegeselection.html" class="option">College Selection</a>
    <a href="linkedin.html" class="option">LinkedIn Profile</a>
    <a href="careeroptions.html" class="option">Career options</a>
    <a href="interview.html" class="option">Interview Preparation</a>
    <!-- Add more options as needed -->
    <a href="logout.php" class="logout">Logout</a>
</div>

<script>
    window.onload = function() {
        setTimeout(function() {
            document.getElementById('welcomeOverlay').style.display = 'none';
        }, 1000); // 1 second
    };
</script>
</body>
</html>
