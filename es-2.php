
<!-- elimina dalla tabella pagamenti la riga con id 8 -->

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
    WHERE id = 8

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
