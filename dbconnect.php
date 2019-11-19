<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "egci313";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

$str = "";
if (($count=mysqli_num_rows($result)) > 0) {

while($row = mysqli_fetch_assoc($result)) {

$str = $str.$row["firstname"].$row["lastname"]; 
}

} else {
echo "0 results";
}
mysqli_close($conn);

$url = 'http://www.atilal.com/egci313/photourl/photo.php?name='.$str;
echo $url;

?>