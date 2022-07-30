<?php
    $value = $_POST['value'];
// Database connection
$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into ValuesList(value) values(?)");
    $stmt->bind_param("i", $value);
    $execval = $stmt->execute();
    echo $execval;
    $execval = $stmt->execute();
    echo "The value have been added successfully...";
    $stmt->close();
    $conn->close();
}
?>