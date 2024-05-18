<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link for some fonts and internet responsive CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main icon of website -->
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
    <title>Micro-Site</title>
    <!-- Internal CSS for (header.php) only -->
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .mylogo{
            float:left;
        }
        .mylogo a{
            cursor:none;
        }
        .topnav .mylogo a:hover{
            background-color: #333;
            color: #f2f2f2;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
            text-align: right;
            justify-content: right;
        }
        .topnav a {
            display: inline-block;
            color: #f2f2f2;
            text-align: right;
            justify-content: right;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav a:hover {
            background-color: #FF4500;
            color: #fff;
        }
        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        .topnav .icon {
            display: none;
        }
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation links -->
    <div class="topnav" id="myTopnav">
        <div class="mylogo"><a href="#"><img src="images/icon.png" width="15px;"> MICRO-SITE</a></div>
        <a href="./index.php"><img src="./images/home.png" alt="home" style="width:13px; margin-right: 2px;"> Home</a>
        <a href="./aboutus.php"><img src="./images/about.png" alt="about" style="width:14px; margin-right: 2px;"> About</a>
        <a href="./reviews.php"> <img src="./images/reviews.png" alt="user_reviews" style="width:15px; margin-right: 2px;"> Reviews</a>
        <a href="./support.php"><img src="./images/support.png" alt="customer_support" style="width:15px; margin-right: 2px;"> Support</a>
        <a href="./company.php"><img src="./images/company.png" alt="about company" style="width:15px; margin-right: 2px;"> Company</a>
        <!-- Script for button (Hamburger Menu) -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- Script for Hamburger Menu (Responsive Design)-->
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>
</html>