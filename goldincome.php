<?php
$conn = new mysqli("localhost", "root", "", 'warcraft');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT zloto FROM uzytkownicy WHERE id = 130");
$gold = $result->fetch_assoc();
echo '<img src="Grafika/icon/gold.png">Złoto:'.$gold['zloto'];
?>