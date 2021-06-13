<!-- This is basically where the backend work gets working
    Database connection, error minimizations
-->
<?php
    // connection variables
    $server = "localhost";
    $username = "deno";
    $password = "deno12man";
    $dbname = "patient";

    // making the connection
    $conn = new mysqli($server, $username, $password, $dbname);
    if(!$conn) {
        die("Could not connect to the server at this time. Try again later....".mysqli_error($conn));
    }

    // Checking for valid connection
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
?>