<!DOCTYPE html>
<html>
<head>
 <style>
        body {
            background-color: #E6E6FA; /* Light purple background */
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4B0082; /* Dark purple for header */
            color: white;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            text-align: left;
            animation: fadeIn 2s ease-in-out;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6em;
            margin: 20px 0;
            opacity: 0;
            animation: fadeInUp 1s ease-in-out forwards;
        }

        p:nth-child(1) {
            animation-delay: 0.5s;
        }

        p:nth-child(2) {
            animation-delay: 1s;
        }

        p:nth-child(3) {
            animation-delay: 1.5s;
        }

        p:nth-child(4) {
            animation-delay: 2s;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</head>
<header>
<h1>About Us</h1>
</header>
<?php include 'header.php'; ?>
<body>
<section id="about">
            <div class="container">
                
                <p>Welcome to Career Guidance, your ultimate destination for career <br>exploration and advice.<br> At Career Guidance, we are passionate about helping individuals discover <br>their potential and find fulfilling career paths.<br></p>
                <p>Our team of experienced career counselors and advisors is dedicated to providing comprehensive <br>guidance tailoredto your unique interests, skills, and goals.<br> Whether you're a student exploring career options or a professional seeking a career change, we're here to<br> support you every step of the way.<br></p>
                <p>Through our range of resources, including articles, tools, and personalized consultations,<br> we empower you to make informed decisions about your future.<br> Our mission is to inspire and guide you towards a successful and rewarding career.</p>
                <p>Join us on this journey of self-discovery and embark on the path to a fulfilling career with Career Guidance.</p>
            </div>
        </section>
</body>
    </html>

