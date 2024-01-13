<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
    </head>
    <body>
        <div class="feed">
    <h1 class="feed">FEEDBACK</h1>
    </div>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wij";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve records from your_table
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

// Check if there are records
if ($result->num_rows > 0) {

    // Output each row
    while ($row = $result->fetch_assoc()) {
        echo  "Date : " . $row["date"] . "  Place : " .$row["place"] . "  Name : ".$row["name"] . "  Feedback : " .$row["feed"] . "<br>";
        
    }

} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="traval 1.js"></script>
</body>
</html>