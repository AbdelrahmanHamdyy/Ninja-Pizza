<?php   
   // Connect to Database
    $conn = mysqli_connect('localhost', 'root', '01013493370Ab', 'ninja_pizza');

    // Check the Connection
    if (!$conn) {
        echo 'Connection Error: '.mysqli_connect_error();
    }
?>