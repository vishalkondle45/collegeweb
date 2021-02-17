<?php
session_start();
?>
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="../images/VishalKondle.jpg" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></span><br>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <div class="w3-container">
        <h5><b>Dashboard</b></h5>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-home"></i>  Home</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus"></i>  Add College</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-university"></i>  Colleges</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-chalkboard-teacher"></i>  Teachers</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users"></i>  Students</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-chalkboard"></i>  Noticeboards</a>
    </div>
</nav>