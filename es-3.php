
<!-- elimina dalla tabella pagamenti la riga con pagante_id = 6 e con status = rejected -->

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

    DELETE
    FROM pagamenti
    WHERE pagante_id = 6
      AND status = 'rejected'

";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

}elseif ($result){
  echo "0 results";
}else{
  echo "query error";
}

$conn->close();

 ?>
