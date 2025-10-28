<!-- header.php -->
<style>
    @keyframes slideIn {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    nav {
        display: flex;
        justify-content: center;
        background-color: #a557c2;
        width: 100%;
        animation: slideIn 1s ease-in-out forwards;
    }
    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }
    nav ul li {
        position: relative;
    }
    nav ul li a {
        display: block;
        padding: 15px 20px;
        color: white;
        text-decoration: none;
    }
    nav ul li a:hover {
        background-color: #9738ba;
    }
    nav ul ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #e6e6fa; /* Light purple background */
        min-width: 200px;
    }
    nav ul ul li {
        width: 100%;
    }
    nav ul ul li a {
        padding: 10px 15px;
        background-color: #a557c2;
    }
    nav ul ul li a:hover {
        background-color: #9738ba;
    }
    nav ul li:hover > ul {
        display: block;
    }
</style>

<nav>
    <ul>
        <li><a href="careerguidance.php">Home</a></li>
        <li><a href="Aboutus.php">About Us</a></li>
        <li>
            <a href="services.php">Services</a>
            <ul>
                <li><a href="signup.php">Resume Building</a></li>
                <li><a href="signup.php">Career Assessment</a></li>
                <li><a href="signup.php">LinkedIn Optimization</a></li>
                <li><a href="signup.php">Interview Preparation</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Contact US</a></li>
        <li>
            <a href="#">Sign In/Sign Up</a>
            <ul>
                <li><a href="signup.php">Sign In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </li>
    </ul>
</nav>
