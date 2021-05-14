<?php
 include("connection.php"); 
$meaning = $_POST['meaning'];
$valu = $_POST['value'];
print_r($deger);
$deger="deneili";


 
$tarih=date("Y-m-d H:i:s");

$sql = "INSERT INTO WordList (word, meaning, note,savedate,userId) VALUES ('$valu', '$meaning', '$tarih', '$tarih', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>