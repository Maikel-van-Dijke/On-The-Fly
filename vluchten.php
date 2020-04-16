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
    $sth = $con->prepare("SELECT * FROM planning order by datumVertrek");
    $row = $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();
}

?>



<table class="lijstStijl">
    <tr>
        <th class="titel">vlucht nummer: </th>
        <th class="titel">Vliegtuig: </th>
        <th class="titel">Vertrek datum: </th>
        <th class="titel">Retour datum: </th>
        <th class="titel">Bestemming: </th>
        <th class="titel">Status: </th>
    </tr>
    <?php
    foreach($sth->fetchAll(PDO::FETCH_OBJ) as $row){
        ?>
        <tr>
            <td class="item"><?php echo $row->vluchtNummer; ?></td>
            <td class="item"><?php echo $row->vliegtuig; ?></td>
            <td class="item"><?php echo $row->datumVertrek; ?></td>
            <td class="item"><?php echo $row->datumRetour; ?></td>
            <td class="item"><?php echo $row->bestemming; ?></td>
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