


<?php

session_start(); // Start the session

// Check if the user is logged in and the email is set in the session
if (isset($_SESSION['tableavail'])) {
    $logged_in_user_email = $_SESSION['logged_in_user'];

// Database credentials
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restraunt"; // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $logged_in_user_email; // Assuming the email field in the database is named 'email'
$phone = $_POST['phone_number'];
$table_number = $_POST['table_number'];
$booking_date = $_POST['booking_date'];


// Check if the entered date and table number already exist in the table
$sql_check = "SELECT * FROM booking WHERE booking_date = '$booking_date' AND table_number = '$table_number'";
$result_check = $conn->query($sql_check);

?>
<?php
if ($result_check->num_rows > 0) {
    // If the data already exists, redirect to 'resfailed.html'
     // Start the session
    $_SESSION['tableavail'] =$table_number; 
   

    
    
    $conn->close();
    header("Location: resfailed.php");
    exit();
} else {
    // If the data doesn't exist, insert into the database
    $sql_insert = "INSERT INTO booking (email, phone_number, table_number, booking_date) VALUES ('$name', '$phone', '$table_number', '$booking_date')";

    if ($conn->query($sql_insert) === TRUE) {
        // If insertion successful, close connection and redirect to a success page
        $conn->close();
        header("Location: index.html");
        exit();
    } else {
        // If there's an error in insertion, handle it accordingly
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
} else {
    // If the user is not logged in, handle the situation (redirect or error message)
    echo "User not logged in";
    // Redirect or perform necessary actions for non-logged-in users
}
?>