<?php
session_start();
include_once 'includes/conn.php';
if (isset($_POST['login'])) {
    $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $status = 0;

    if ($usertype === 'student')
        $query = mysqli_query($conn, "SELECT * FROM users WHERE usertype='student' AND username='$username' AND `password`='$password'");

    if ($usertype === 'teacher')
        $query = mysqli_query($conn, "SELECT * FROM users WHERE usertype='teacher' AND username='$username' AND `password`='$password'");

    if ($usertype === 'college')
        $query = mysqli_query($conn, "SELECT * FROM college WHERE username='$username' AND `password`='$password'");

    if ($usertype === 'admin')
        $query = mysqli_query($conn, "SELECT * FROM `admin` WHERE username='$username' AND `password`='$password'");

    if (mysqli_num_rows($query))
        $status = 1;


    if ($status) {
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $usertype;
        echo "<script>window.location.href='$usertype/index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Web</title>
    <link rel="stylesheet" href="css/w3.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous"> -->
    <script src="js/w3.js"></script>
    <script src="js/fontawesome.js"></script>
    <style>
        .progress-container {
            width: 100%;
            height: 5px;
            background: #ccc;
        }

        .progress-bar {
            height: 5px;
            background: #f44336;
            width: 0%;
        }

        .content {
            padding: 100px 0;
            margin: 50px auto 0 auto;
            width: 80%;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="">

    <!-- Menu Bar -->
    <div class="w3-top">
        <div class="w3-bar w3-border w3-black">
            <a href="#home" class="w3-bar-item w3-button">Home <i class="fas fa-home"></i> </a>
            <a href="#collegeweb" class="w3-bar-item w3-button w3-hover-green">CollegeWeb <i class="fas fa-university"></i></a>
            <a href="#about" class="w3-bar-item w3-button w3-hover-blue">About <i class="fas fa-address-card"></i></a>
            <a href="#contact" class="w3-bar-item w3-button w3-hover-teal">Contact <i class="fas fa-address-book"></i></a>
            <a onclick="document.getElementById('login').style.display='block'" class="w3-bar-item w3-button w3-hover-teal w3-right">Login <i class="fas fa-sign-in-alt"></i></a>
        </div>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <!-- Slideshow -->
    <div class="w3-content w3-section" id="home">
        <br>
        <br><br>
        <img class="mySlides" src="images/1.jpg" style="width:100%">
        <img class="mySlides" src="images/2.jpg" style="width:100%">
        <img class="mySlides" src="images/3.jpg" style="width:100%">
    </div>
    <br><br>

    <!-- College Web Info -->
    <center>
        <div class="w3-container" id="collegeweb" style="width:70%">
            <p class="w3-black w3-xxxlarge w3-leftbar w3-bottombar w3-topbar w3-rightbar w3-border-red">CollegeWeb</p>
            <div class="w3-panel w3-card-4 w3-light-grey">
                <p class=" w3-large w3-serif w3-left-align">
                    <i class="fa fa-quote-right w3-xxlarge w3-text-red"></i><br>
                    { What's College Network }
                </p>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </center>

    <!-- About US -->
    <center>
        <div class="w3-container w3-white" style="width: 70%;" id="about">
            <p class="w3-black w3-xxxlarge w3-leftbar w3-bottombar w3-topbar w3-rightbar w3-border-red">About US</p>
            <div class="w3-row-padding w3-margin-top w3-left-align">

                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <img src="images/VishalKondle.jpg" style="width:100%">
                        <div class="w3-container">
                            <h4><b>Vishal Kondle</b></h4>
                            <p>Group Leader</p>
                        </div>
                    </div>
                </div>

                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <img src="images/AkashChintakindi.jpg" style="width: 100%">
                        <div class="w3-container">
                            <h4><b>Akash Chintakindi</b></h4>
                            <p>Group Member</p>
                        </div>
                    </div>
                </div>

                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <img src="images/VishalKondle.jpg" style="width:100%">
                        <div class="w3-container">
                            <h4><b>Niranjan Gundla</b></h4>
                            <p>Group Member</p>
                        </div>
                    </div>
                </div>

                <div class="w3-quarter">
                    <div class="w3-card-4">
                        <img src="images/RavindraSoma.png" style="width:100%">
                        <div class="w3-container">
                            <h4><b>Ravindra Soma</b></h4>
                            <p>Group Member</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br><br><br><br>
    </center>

    <!-- Contact US -->
    <center>
        <div class="w3-container w3-row" id="contact" style="width:70%">
            <p class="w3-black w3-xxxlarge w3-leftbar w3-bottombar w3-topbar w3-rightbar w3-border-red">Contact US</p>
            <div class="w3-half w3-left-align w3-xlarge">
                <br>
                <p>
                    <i class="fas fa-user"></i> : Vishal Kondle
                </p>
                <p>
                    <i class="fas fa-phone-alt"></i> : 7276718848
                </p>
                <p>
                    <i class="fas fa-envelope"></i> : vishalkondle@gmail.com
                </p>
                <p>
                    <i class="fas fa-map-marker-alt"></i>&nbsp; : Solapur, MH
                </p>
            </div>

            <div class="w3-half w3-left-align">
                <form action="action_page.php" method="post">

                    <label for="fname"><b>Full Name</b></label>
                    <input type="text" class="w3-input" id="name" name="name" placeholder="Your Full Name...">
                    <br>

                    <label for="lname"><b>Email</b></label>
                    <input type="email" class="w3-input" id="email" name="email" placeholder="Email Address...">
                    <br>

                    <label for="subject"><b>Subject</b></label>
                    <textarea id="subject" class="w3-input" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    <br>

                    <center><input type="submit" class="w3-btn w3-green" value="Submit"></center>

                </form>
                <br>
            </div>
        </div>
    </center>
    <div class="w3-container w3-black">
        <p class="w3-container w3-xlarge w3-center w3-white w3-panel">
            <i class="fa fa-google w3-text-red w3-hover-text-black"></i> &emsp;
            <i class="fa fa-facebook w3-text-blue w3-hover-text-black"></i> &emsp;
            <i class="fa fa-telegram w3-text-blue w3-hover-text-black"></i> &emsp;
            <i class="fa fa-instagram w3-text-purple w3-hover-text-black"></i> &emsp;
            <i class="fa fa-twitter w3-text-blue w3-hover-text-black"></i> &emsp;
            <i class="fa fa-whatsapp w3-text-green w3-hover-text-black"></i> &emsp;
        </p>
    </div>

    <div id="login" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                <!-- <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top"> -->
            </div>

            <form class="w3-container" method="post">
                <div class="w3-section">
                    <br>
                    <select name="usertype" id="" class="w3-select" required>
                        <option disabled selected>Who Are You</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="college">College</option>
                        <option value="admin">Admin</option>
                    </select>
                    <br><br>
                    <label><b>Username</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
                    <label><b>Password</b></label>
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
                    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="login">Login</button>
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('login').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
            </div>

        </div>
    </div>

</body>

</html>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }

    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {
        myFunction()
    };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>