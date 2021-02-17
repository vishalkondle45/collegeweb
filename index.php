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
            <a href="#login" class="w3-bar-item w3-button w3-hover-teal w3-right">Login <i class="fas fa-sign-in-alt"></i></a>
        </div>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>

        <br>
    </div>
    <br><br>

    <!-- Slideshow -->
    <div class="w3-content w3-section" id="home">
        <br>
        <img class="mySlides" src="images/1.jpg" style="width:100%">
        <img class="mySlides" src="images/2.jpg" style="width:100%">
        <img class="mySlides" src="images/3.jpg" style="width:100%">
    </div>
    <br><br>

    <!-- College Web Info -->
    <center>
        <div class="w3-container" id="collegeweb" style="width:70%">
            <p class="w3-black w3-xxxlarge">CollegeWeb</p>
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
            <p class="w3-black w3-xxxlarge">About US</p>
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
            <p class="w3-black w3-xxxlarge">Contact US</p>
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
                <form action="action_page.php">

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
                <br><br><br><br><br>
            </div>
        </div>
    </center>
    <div class="w3-container w3-green">
        <p class="w3-container w3-xlarge w3-center w3-white">
            <i class="fa fa-google"></i> &emsp;
            <i class="fa fa-facebook"></i> &emsp;
            <i class="fa fa-telegram"></i> &emsp;
            <i class="fa fa-instagram"></i> &emsp;
            <i class="fa fa-twitter"></i> &emsp;
            <i class="fa fa-pinterest-p"></i> &emsp;
            <i class="fa fa-whatsapp"></i> &emsp;
            <i class="fa fa-youtube"></i> &emsp;
            <i class="fa fa-signal"></i> &emsp;
        </p>
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