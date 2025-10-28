<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance</title>
    <style>
        body, html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }
        h1 {
            font-size: 70px;
        }
        header {
            background-color: Plum;
            color: 0000CD;
            padding: 10px 0;
            text-align: center;
            width: 100%;
            -webkit-backdrop-filter: blur(8px);  /* Safari 9+ */
            backdrop-filter: blur(8px); /* Chrome and Opera */
            box-shadow: inset 0 0 0 200px rgba(255,255,255,0.08);
            text-shadow: 1px 1px 1px #957dad,
                         1px 2px 1px #957dad,
                         1px 3px 1px #957dad,
                         1px 4px 1px #957dad,
                         1px 5px 1px #957dad,
                         1px 6px 1px #957dad,
                         1px 10px 5px rgba(16, 16, 16, 0.5),
                         1px 15px 10px rgba(16, 16, 16, 0.4),
                         1px 20px 30px rgba(16, 16, 16, 0.3),
                         1px 25px 50px rgba(16, 16, 16, 0.2);
        }
 header .button-container {
            position: absolute;
            top: 10px;
            right: 20px;
        }
        header .button-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        header .button-container button:hover {
            background-color: #45a049;
        }

        .container {
            display: flex;
            flex: 1;
            justify-content: space-between;
            width: 100%;
            padding: 20px;
        }

        .content {
            width: 70%;
        }

        .side-container {
            margin-top: 0;
            background-color: #F0F8FF;
            width: 30%;
            height: 60%;
            overflow: hidden;
            position: relative;
        }

        .marquee {
            display: flex;
            flex-direction: column;
            position: absolute;
            bottom: 0;
            animation: scroll 40s linear infinite;
        }

        @keyframes scroll {
            100% {
                transform: translateY(100%);
            }
            0% {
                transform: translateY(-100%);
            }
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        .image-container {
            margin: 20px 0;
            text-align: center;
        }

        .image-container img {
            max-width: 50%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .clickable-sections {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .clickable-section {
            margin: 60px 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 5px;
            transition: transform 0.3s ease;
            text-decoration: none;
            color: #9b59b6;
            width: 80%;
            text-align: center;
        }

        .clickable-section:hover {
            transform: translateY(-5px);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .footer-links li {
            margin: 0 15px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <h1>CAREER GUIDANCE SYSTEM</h1>
<div class="button-container">
        <button onclick="window.location.href='project/admin/adminhome.php'">Admin</button>
    </div>
</header>
<?php include 'header.php'; ?>
<div class="container">
    <div class="content">
        <h1>Welcome to Career Guidance</h1>
        <div class="image-container">
            <img src="https://hikewise.com/static/media/hero.6aaaf0386f05a1a9da02.webp" alt="Career Guidance">
            <p>Throughout their professional lives, people encounter many situations where they could benefit from unbiased advice. They may be in the process of choosing a stream or a career, deciding whether or not they should change careers or jobs, re-entering the workforce, or maybe wanting to learn more about career guidance in general - a complete knowledge always helps. A good foundation begins with the basics. They come to the realization that it’s an overwhelming process, and they need to learn all about the what, how, and why of the career guidance process.</p>
        </div>
        <h2>What Is Career Guidance?</h2>
        <div class="image-container">
            <img src="https://hikewise.com/static/media/how_it_works.2cc6353fb83ce4d024ff.webp" alt="What Is Career Guidance">
            <p>The word “guidance” originated back in the 1530s, and is defined as the process of directing conduct. Career guidance can be defined as a comprehensive, developmental program designed to assist individuals in making and implementing informed educational and occupational choices. In simple words, it is a journey on which people develop to make mature and informed decisions. It is the act of guiding or showing the way; it is the act of seeking advice.</p>
        </div>
        <p>Career guidance is the guidance given to individuals to help them acquire the knowledge, information, skills, and experience necessary to identify career options, and narrow them down to make one career decision. This career decision then results in their social, financial and emotional well-being throughout.</p>
        <p>In an age where career queries are not uncommon, it’s important to answer queries related to career guidance or career, in general.</p>
        <h2>Who can benefit from Career Guidance?</h2>
        <div class="image-container">
            <img src="https://hikewise.com/static/media/why.54a8e4defa4da674f193.png" alt="Who can benefit from Career Guidance">
            <p><strong>Student Of Class 9th - 10th</strong></p>
            <p>Setting the basics right solves a lot of confusions that might arise later. Whether it is choosing the correct stream to the correct board, and mapping career goals, a right start at the right time makes all the difference.</p>
        </div>
        <div class="image-container">
            <img src="https://hikewise.com/static/media/why.706b8a9d72383f743509.png" alt="Who can benefit from Career Guidance">
            <p><strong>Student Of Class 11th - 12th</strong></p>
            <p>One chooses one’s stream out of the four possible options (non-medical, medical, humanities, commerce), however the career options possible for a student to opt for are more than hundreds. To make sure that the entire process from choosing the right career options to achieving those goals goes smoothly, it is important that one seek career guidance from an informed (and experienced) mentor (read: career guide).</p>
        </div>
        <div class="image-container">
            <img src="https://hikewise.com/static/media/greetings.92a85b38ef0b8d9b1bb0fc1bec01e2ac.svg" alt="Who can benefit from Career Guidance">
            <p><strong>College Going Students/ Working Professionals</strong></p>
            <p>For people who have already made a career decision need to work towards it, to attain the maximum results. A guide informs them of the best career opportunities and ways to do the best in the field they have chosen for themselves. Generally, people end up taking the wrong paths in order to achieve their goals. Either they realize that the career option they have chosen isn’t meant for them, or it dawns upon them that the option they have chosen isn’t strong enough to keep them motivated or excited throughout their professional lives. As a result, they tend to rely on an expert’s advice, and that is where a guide steps in.</p>
        </div>
        <h2>Do I Need Career Guidance?</h2>
        <div class="image-container">
            <img src="https://hikewise.com/static/media/hero.4ebd720e60af59de3138.webp" alt="Do I Need Career Guidance">
            <p>The path to success is to take massive, determined actions. Taking well-informed career decisions with the help of a guide paves a smoother road to one’s career objective.</p>
        </div>
    </div>

    <div class="side-container">
        <div class="marquee">
            <div class="clickable-sections">
                <div class="clickable-section">
                    <section id="creative">
                        <img src="https://mindlerimages.imgix.net/tinyimg/005-creative.svg" alt="Creative Image">
                        <h2>Creative</h2>
                        <p>Enable students to identify their best-fit career with our world-class career assessment and personalised guidance.</p>
                    </section>
                </div>
                <div class="clickable-section">
                    <section id="devices">
                        <img src="https://mindlerimages.imgix.net/tinyimg/002-devices.svg" alt="Devices Image">
                        <h2>Devices</h2>
                        <p>Empower students to learn all about the professional world with virtual career simulations, exhaustive career library, career blogs and vlogs.</p>
                    </section>
                </div>
                <div class="clickable-section">
                    <section id="certificate">
                        <img src="https://mindlerimages.imgix.net/tinyimg/003-certificate.svg" alt="Certificate Image">
                        <h2>Certificate</h2>
                        <p>Pave student’s way to their dream college with our end-to-end college application guidance, scholarship drive and corporate internship program.</p>
                    </section>
                </div>
                <div class="clickable-section">
                    <section id="career">
                        <img src="https://mindlerimages.imgix.net/tinyimg/003-certificate.svg" alt="Career Image">
                        <h2>Career</h2>
                        <p>Enable schools in creating a career guidance ecosystem in sync with the vision of New Education Policy.</p>
                    </section>
                </div>
                <div class="clickable-section">
                    <section id="team">
                        <img src="https://mindlerimages.imgix.net/tinyimg/010-team.svg" alt="Team Image">
                        <h2>Team</h2>
                        <p>Empower educators to become International Certified Career Coaches and build a career in career guidance & counselling.</p>
                    </section>
                </div>
                <div class="clickable-section">
                    <section id="startup">
                        <img src="https://mindlerimages.imgix.net/tinyimg/007-startup.svg" alt="Startup Image">
                        <h2>Startup</h2>
                        <p>Revolutionary assessment platform and technology-driven career guidance solutions for educators to boost their career guidance & counselling practice.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <p>&copy; 2023 Career Guidance. All rights reserved.</p>
    <ul class="footer-links">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</footer>
</body>
</html>
