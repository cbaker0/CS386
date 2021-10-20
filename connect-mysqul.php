<?php
$servername = "localhost";
$database = "u136679073_AlennData";
$username = "u136679073_agw73";
$password = "@Agwri584";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";

$sqldata = mysqli_query($conn, "SELECT * FROM Pokedex");

echo "<table>";
echo "<tr><th>No.</th><th>Name</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC))
{
	echo "<tr><td>";
	echo $row['No.'];
	echo "</td><td>";
	echo $row['Name'];
	echo "</td></tr>";
}

echo "</table>";



mysqli_close($conn);
?>