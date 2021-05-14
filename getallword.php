<?php
 include("connection.php"); 
$query = "SELECT word FROM wordlist where ogrenimdurum IS NOT NULL ORDER BY word";
$result = $conn->query($query);
$rows = [];
while($row = $result->fetch_row()) {
    $rows[] = $row[0];

}
/*echo "<pre>";
print_r($rows);
echo "</pre>";
if (!in_array("columni", $rows)) {

    echo "afteri dizinde var";
 }

 */
mysqli_close($conn);

?>