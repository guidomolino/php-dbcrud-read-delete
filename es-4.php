<!-- seleziona dalla tabella pagamenti le colonne id, status e price di tutti i pagamenti con price superiore a 600, stampa il risultato in una lista non ordinata -->

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

    SELECT id, status, price
    FROM pagamenti
    WHERE price > 600

";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

  ?>
  <ul>
    <?php

    while ($row = $result->fetch_assoc()) {
      echo "<li>" . "id: " . $row['id'] . " | " . "status: " . $row['status'] . " | " . "price: " . $row['price'];
    }

    ?>
  </ul>
  <?php
}elseif ($result){
  echo "0 results";
}else{
  echo "query error";
}

$conn->close();

 ?>
