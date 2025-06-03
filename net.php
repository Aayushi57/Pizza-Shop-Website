<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "contactus_database",) or die("coonection failed");
$sql = "INSERT INTO us_table (name, email, subject, message) VALUES ('{$name}', '{$email}', '{$subject}', '{$message}')";
$result = mysqli_query($conn, $sql) or die("query failed");
header("location: http://localhost/project/contactus.php");
mysqli_close($conn);
?>