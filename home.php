<?php
$host = "localhost";
$dbname = "onthefly";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");

?>
<!DOCTYPE html>
<head>
    <title>On the fly</title>
    <link rel="stylesheet" href="vliegtuigje3.css">
</head>
<body>
<ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a target="_blank" href="/vliegtuig/insert.php">Toevoegen</a></li>
    <li><a target="_blank" href="/vliegtuig/overzicht.php">Overzicht</a></li>
    <li><a href="https://www.instagram.com/maikelvand/">Test 3</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <h2>Vliegtuigjes</h2>
</div>
</body>
</html>