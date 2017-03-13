<html>
<?php
$a=12;
$b=35.99999; 
$c="baabtra"; 
$d=TRUE;

echo "<h2>before convertion</h2>";
echo $a,"<br>",$b,"<br>",$c,"<br>",$d;

echo "<br><h2>after convertion to integer</h2>";
echo (int)$a,"<br>",(int)$b,"<br>",(int)$c,"<br>",(int)$d;

echo "<br><h2>after convertion to string</h2>";
echo (string)$a,"<br>",(string)$b,"<br>",(string)$c,"<br>",(string)$d;

echo "<br><h2>after convertion to boolean</h2>";
echo (boolean)$a,"<br>",(boolean)$b,"<br>",(boolean)$c,"<br>",(boolean)$d;
?>
</html>