<!-- seleziona tutto dalla tabella pagamenti e stampa il risultato in una lista ordinata -->


<?php

$user = 'root';
$password = 'root';
$db = 'dbhotel';
$host = 'localhost';
$port = 3306;

$conn = new mysqli($host, $user, $password, $db);

if ($conn && $conn->conntect_error) {
  echo "Connection failed: " . $conn->conn_error;
  return;
}

$sql = "

    SELECT *
    FROM pagamenti

";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

  ?>
  <ol>
  <?php

  while ($row = $result->fetch_assoc()) {
    echo "<li>" . "id: " . $row['id'] . " | " . "status: " . $row['status'] . " | " . "price: " . $row['price'];
  }

  ?>
  </ol>
  <?php

}elseif ($result){
  echo "0 results";
}else{
  echo "query error";
}

$conn->close();

 ?>
