<!DOCTYPE html>
<head>
    <title>On the fly</title>
    <link rel="stylesheet" href="vliegtuigje4.css">
</head>
<body>

<div style="padding:1px 16px;height:1000px;">
    <h3>Planning toevoegen mislukt!</h3>
</div>
</body>
<body class="toevoegen">
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "onthefly";
try {
    $vliegtuig = $_POST['vliegtuig'];
    $datumVertek = $_POST['datumVertek'];
    $datumRetour = $_POST['datumRetour'];
    $bestemming = $_POST['bestemming'];
    $status = $_POST['status'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO planning (vliegtuig,datumVertrek,datumRetour,bestemming,status)
    VALUES ('$vliegtuig','$datumVertek','$datumRetour','$bestemming','$status')";
    $conn->exec($sql);
    echo "<script>window.close();</script>";
}
catch(PDOException $e)
{

    echo $sql . "<br>" . $e->getMessage("<script>window.close()</script>");
}

$conn = null;
?>
</body>
</html>