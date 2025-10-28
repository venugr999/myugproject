<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <style>
       body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
        .main {
            width: 350px;
            height: 500px;
            background: red;
            overflow: hidden;
            background: url("https://img.freepik.com/premium-vector/abstract-realistic-technology-particle-background_23-2148414765.jpg?w=740") no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
            position: relative;
        }
        #chk {
            display: none;
        }
        .signup, .login {
            position: relative;
            width: 100%;
            height: 100%;
        }
        label {
            color: #fff;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }
        input {
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }
        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #573b8a;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }
        button:hover {
            background: #6d44b8;
        }
        .login {
            height: 460px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: .8s ease-in-out;
        }
        .login label {
            color: #573b8a;
            transform: scale(.6);
        }

        #chk:checked ~ .login {
            transform: translateY(-500px);
        }
        #chk:checked ~ .login label {
            transform: scale(1);
        }
        #chk:checked ~ .signup label {
            transform: scale(.6);
        }
        .message {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border-radius: 5px;
            font-size: 1em;
            text-align: center;
        }
        .welcome {
            color: #fff;
            font-size: 1.5em;
            text-align: center;
            margin-top: 20px;
        }    </style>
</head>
<body>
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

    $message = "";
    $welcome_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $form_type = $_POST['form_type'];

        if ($form_type == "signup") {
            $username = $conn->real_escape_string($_POST['username']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);

            // Check if the email already exists
            $check_sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($check_sql);

            if ($result->num_rows > 0) {
                $message = "Email already exists";
            } else {
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

                if ($conn->query($sql) === TRUE) {
                    $message = "Registration successful. Login now";
                } else {
                    $message = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } elseif ($form_type == "login") {
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $user['username'];
                    header("Location: afterlogin.php");
                    exit();
                } else {
                    $message = "Invalid email or password!";
                }
            } else {
                $message = "Invalid email or password!";
            }
        }

        $conn->close();
    }

    if (isset($_SESSION['username'])) {
        $welcome_message = "Welcome, " . $_SESSION['username'];
    }
    ?>

    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="" method="post">
                <label for="chk" aria-hidden="true">Register</label>
                <input type="hidden" name="form_type" value="signup">
                <input type="text" name="username" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="" pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$" title="Please enter a valid Gmail address (e.g., example@gmail.com)">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Register</button>
            </form>
        </div>

        <div class="login">
            <form action="" method="post">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="hidden" name="form_type" value="login">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Login</button>
            </form>
        </div>

        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <?php if (!empty($welcome_message)): ?>
            <div class="welcome"><?php echo $welcome_message; ?></div>
        <?php endif; ?>
    </div>

    <script>
        // Vanish the message after 4 seconds
        setTimeout(function() {
            var messageDiv = document.querySelector('.message');
            if (messageDiv) {
                messageDiv.style.transition = 'opacity 0.5s ease';
                messageDiv.style.opacity = '0';
                setTimeout(function() {
                    messageDiv.style.display = 'none';
                }, 500);
            }
        }, 4000);
    </script>
</body>
</html>
