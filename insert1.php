<!DOCTYPE html>
<head>
    <title>On the fly</title>
    <link rel="stylesheet" href="vliegtuigje1.css">
</head>
<body>

<div style="padding:1px 16px;height:1000px;">
    <h3>Vliegtuig toevoegen succesvol!</h3>
</div>
</body>
<body class="toevoegen">
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "onthefly";
try {
    $type = $_POST['type'];
    $vliegmaatschappij = $_POST['vliegmaatschappij'];
    $status = $_POST['status'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO vliegtuigen (type,vliegmaatschappij,status)
    VALUES ('$type', '$vliegmaatschappij','$status')";
    $conn->exec($sql);
    echo "Nieuw vliegtuig succesvol toegevoegd!";
}
catch(PDOException $e)
{

    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
</body>
</html>