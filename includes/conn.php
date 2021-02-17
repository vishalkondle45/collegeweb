<?php
$conn = mysqli_connect("localhost", "root", "", "collegeweb");

if (!($conn)) {
    echo "<script>window.location.href='no_database.php'</script>";
}
