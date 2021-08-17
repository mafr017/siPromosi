<?php 
include 'koneksi.php';

$queryResult = $conn->query("SELECT x1, x2 FROM promosi");
$result = array();

while ($fetchData = $queryResult->fetch_assoc()) {
    $result[]=$fetchData;
}

echo json_encode(['regresi' => $result]);
?>