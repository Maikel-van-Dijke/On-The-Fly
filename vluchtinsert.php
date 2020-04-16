<!DOCTYPE html>
<head>
    <title>On the fly</title>
    <link rel="stylesheet" href="vliegtuigje4.css">
</head>
<!DOCTYPE html>
<html>
<body class="toevoegen">
<form method="post" action="vluchtinsert1.php">
    Vul hier het vliegtuig in:<br>
    <input type="text" name="vliegtuig" placeholder="Vliegtuig">
    </br>
    Vertrek datum:</br>
    <input type="date" name="datumVertek" placeholder="Vertek datum">
    </br>
    Retour datum:</br>
    <input type="date" name="datumRetour" placeholder="Retour datum">
    </br>
    Bestemming:</br>
    <input type="text" name="bestemming" placeholder="Bestemming">
    </br>
    Status:</br>
    <input type="text" name="status" placeholder="Status">
    </br><br/>

    <input type="submit" name="save" value="Toevoegen" title="Planning toevoegen">
</form>
</body>
</html>

<?php



?>
