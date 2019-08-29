<?php require "head.php"; ?>

<h2>Harjoitus 1</h2>

<form action="h1.php" method="get">
   Anna rahanmäärä : <input type="number" name="name" maxlength=30><br>

             <input type="submit" value="Lähetä">
</form>

<?php
function kustannus($matka, $bensanhinta=1.55,$rahanmäärä)
{
return $matka/100*$litrahinta*$kulutus;

} 


?>
<?php require "footer.php"; ?>