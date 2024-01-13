<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wij";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch form data
    $name = $_POST['name'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $feed = $_POST['feed'];

    // Validate form data
    if (empty($name) || empty($place) || empty($feed)) {
        echo "Please fill in all fields.";
    } else {
      $sql = "INSERT INTO feedback (name, place,date,feed) VALUES ('$name', '$place','$date','$feed')";
$result = $conn->query($sql);

    if ($result === TRUE) {
    echo "<script>alert('Your message has been sent successfully!')</script>";
    echo "<script>window.open('index.html','_self')</script>";
        } else {
            echo "<script>alert('Error sending the message. Please try again later.')</script>";
            echo "<script>window.open('index.html','_self')</script>";
        }
    }
}
$conn-> close();
?>