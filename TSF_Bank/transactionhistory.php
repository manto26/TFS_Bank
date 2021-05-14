<?php
$title = 'Transaction History';
    require_once 'navbar.php';
    require_once 'db/connect.php'
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparks_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT transaction_num, firstname, lastname, amount, email FROM transactions_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo "<br><br><table class='table table-striped  table-bordered table-dark table-lg text-center'><tr><th scope='col'>ID</th><th scope='col'>Name</th><th scope='col'>Amount in &#128</th><th scope='col'>E-mail</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["transaction_num"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["amount"]."</td><td>".$row["email"];"</td></tr><br><br>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<?php
    require_once 'footer.php';
?>