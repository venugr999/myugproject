<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<style>
    .col-md-8 {
        font-family: monospace;
        color: #000;
        background-color: #ebeae8;
    }

    h1 {
        font-family: monospace;
        font-weight: bold;
        color: #0dbda5;
    }

    input[type=text] {
        transition: 0.4s ease-in-out;
    }

    input[type=email] {
        transition: 0.4s ease-in-out;
    }

    input[type=number] {
        transition: 0.4s ease-in-out;
    }

    textarea {
        transition: 0.4s ease-in-out;
    }

    input[type=text]:hover {
        outline: none;
        border: 1px solid #0dbda5;
    }

    input[type=text]:focus {
        border: 1px solid #0dbda5;
    }

    input[type=email]:hover {
        outline: none;
        border: 1px solid #0dbda5;
    }

    input[type=email]:focus {
        border: 1px solid #0dbda5;
    }

    input[type=number]:hover {
        outline: none;
        border: 1px solid #0dbda5;
    }

    input[type=number]:focus {
        border: 1px solid #0dbda5;
    }

    textarea:hover {
        outline: none;
        border: 1px solid #0dbda5;
    }

    textarea:focus {
        border: 1px solid #0dbda5;
    }

    .btn-info {
        background-color: #0dbda5;
    }
</style>

<?php include 'header.php'; ?>
<body>
    <div class="container-fluid">
        <br><br><br>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you, please drop us a line if you've any query.</p>
            <br><br>

            

            <form action="contactdb.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" required="">
                    </div>
                    <div class="col-md-4">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control" required="">
                    </div>
                    <div class="col-md-4">
                        <label>Phone No</label>
                        <input type="number" name="phone" placeholder="Enter Number" class="form-control" required="">
                    </div>
                </div>
                <br><br>
                <label>Subject</label>
                <input type="text" name="subject" placeholder="Enter Subject" class="form-control" required="">
                <br><br>
                <textarea name="message" rows="5" class="form-control" placeholder="Enter Message" required=""></textarea>
                <br><br>
                <center>
                    <button class="btn btn-info" type="submit"><i class="fas fa-paper-plane"></i>&nbsp; Submit</button>
                </center>
                <br><br>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#message').fadeOut('slow');
            }, 2000); // 2000 milliseconds = 2 seconds
        });
    </script>
</body>
</html>
