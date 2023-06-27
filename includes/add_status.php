<?php

session_start();

$servername = "162.241.226.13";
$username = "gabriht1_botboo";
$password = "93H78g10@1103";
$dbname = "gabriht1_botboo";

$conn = new mysqli($servername, $username, $password, $dbname);

$ProcessName = htmlspecialchars($_POST['process-name']);
$MachineName = htmlspecialchars($_POST['machine_name']);
$Status = htmlspecialchars($_POST['status']);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 
"UPDATE Machines SET machine_status = '$Status', ProcessName = '$ProcessName'
WHERE MachineName = '$MachineName'";

if ($conn->query($sql) == TRUE) {
    echo "<p>" . $ProcessName . "</p>";
    echo "<p>" . $MachineName . "</p>";
    echo "<p>" . $Status . "</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);