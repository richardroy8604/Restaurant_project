<?php
// Include the database connection file
include 'connection.php';

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $item_number = $_POST['item_number'];
    $item = $_POST['item'];
    $price = $_POST['price'];

    // SQL query to insert data into the 'menu' table
    $sql_insert = "INSERT INTO menu (item_number, item, price) VALUES ('$item_number', '$item', '$price')";

    // Perform the insertion
    if ($connect->query($sql_insert) === TRUE) {
        // Redirect back to the main page or display a success message
        header("Location: adminpage.php"); // Replace 'your_main_page.php' with your actual main page
        exit();
    } else {
        // Handle errors if the insertion fails
        echo "Error: " . $sql_insert . "<br>" . $connect->error;
    }
}

// Close the database connection
$connect->close();
?>