<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "phpbasicdb";

// Create connection
$conn = mysqli_connect($host, $db_user, $db_password, $db_name) or die("Connection Error: " . mysqli_connect_error());
// var_dump($conn);
echo ("<pre>");
print_r($conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully" . "<br>";
    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($rowArr = mysqli_fetch_assoc($result)) {
            echo "id: " . $rowArr["id"] . " - Name: " . $rowArr["stu_name"] . " - Course: " . $rowArr["course"] . " - Enrolled on: " . $rowArr["created"] . "<br>";
            print_r($rowArr);
        }
    } else {
        echo "0 results.";
    }
}
