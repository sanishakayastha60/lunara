<?php
$servername = 'localhost';
$username ='root';
$password='';
$dbname='users';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['email'])) {
    $name = $conn->real_escape_string($_GET['name']);
    $name = $conn->real_escape_string($_GET['phone']);
    $email = $conn->real_escape_string($_GET['email']);
    $sql = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: display.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid input";
}
mysqli_close($conn);
?>
