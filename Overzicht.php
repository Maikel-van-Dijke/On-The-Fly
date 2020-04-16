<!DOCTYPE html>
<head>
    <title>On the fly</title>
    <link rel="stylesheet" href="overzicht3.css">
</head>
<body>
<?php
$host = "localhost";
$dbname = "onthefly";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");

if(isset($_POST['vliegmaatschappij']));
else{
    $str = $_POST;
    $sth = $con->prepare("SELECT * FROM vliegtuigen order by vliegtuigNummer");
    $row = $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();
}

?>



<table class="lijstStijl">
    <tr>
        <th class="titel">ID: </th>
        <th class="titel">Type: </th>
        <th class="titel">Maatschappij: </th>
        <th class="titel">Status: </th>
    </tr>
    <?php
    foreach($sth->fetchAll(PDO::FETCH_OBJ) as $row){
        ?>
        <tr>
            <td class="item"><?php echo $row->vliegtuigNummer; ?></td>
            <td class="item"><?php echo $row->vtype; ?></td>
            <td class="item"><?php echo $row->vliegmaatschappij; ?></td>
            <td class="item"><?php echo $row->status; ?></td>
        </tr>
    <?php } ?>
</table>
<br/><br/><br/>
<?php
echo '<a href="javascript:window.close();" class="terug">Ga terug</a>';
?>

</body>
</html>