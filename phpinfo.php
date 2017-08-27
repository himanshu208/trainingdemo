<?php ini_set('memory_limit', '512M');
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$db123 = mysqli_connect('localhost','root','','master')or die('Error connecting to MySQL server.');

$dsn = "sqlsrv:Server=DESKTOP-Q2DHJS8;Database=PetPlace";
$conn = new PDO($dsn, "", "");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$sql = "SELECT * FROM writers_writer";
$stmt = $conn->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $k => $row) { //echo implode(",",array_keys($row));
   // print_r($row);
	$sql = "INSERT INTO tblsample VALUES (".implode(",", array_map(function($x) use ($conn) {
    return "'" . addslashes($x) . "'";
}, $row)).")  ";
	$sql = mysqli_query($db123,$sql) or die(mysqli_error($db123));
	//die();
	sleep(1);
} 

die();

?>