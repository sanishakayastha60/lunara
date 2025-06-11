<?php
$servername = 'localhost';
$username ='root';
$password='';
$dbname='users';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,name, phone, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start the HTML table and header
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Name</th><th>Phone</th><th>Email</th><th>Password</th></tr>";
    
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["password"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
 echo "<td><a href='update.php?id=" . urlencode($row["id"]) . "'>Edit</a></td>";
mysqli_close($conn);
?>
