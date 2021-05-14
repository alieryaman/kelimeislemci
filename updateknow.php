<?php
 
 include("connection.php"); 

 $valu = $_POST['value'];
 //$valu ="besir";
$tarih=date("Y-m-d H:i:s");

$sql = "UPDATE wordlist SET ogrenimdurum =1 WHERE word='$valu'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>