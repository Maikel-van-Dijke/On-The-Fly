<!DOCTYPE html>
<head>
    <title>On the fly</title>
    <link rel="stylesheet" href="vliegtuigje4.css">
</head>
<!DOCTYPE html>
<html>
<body class="toevoegen">
    <form method="post" action="insert1.php">
        Type van het vliegtuig:<br>
        <input type="text" name="type" placeholder="Vul het type van het vliegtuig in">
        </br>
        Vliegmaatschappij:</br>
        <input type="text" name="vliegmaatschappij" placeholder="Vul de vliegtuigmaatschappij in">
        </br>
        Status van het vliegtuig:</br>
        <input type="text" name="status" placeholder="Vul de status van het vliegtuig in">
        </br><br/>
        <input type="submit" name="save" value="Toevoegen" title="Druk hier om het vliegtuig toe te voegen">
    </form>
<form method="post">
    <input type="submit" name="vlucht" value="Toevoegen van een vlucht" formaction="vluchtinsert.php">
</form>
</body>
</html>

<?php



?>