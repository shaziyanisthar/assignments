<html>
<head>
<title>remove duplicate number in an Array</title>
</head>
</html>
<?php
$array = array(1, 2, 2, 3);
$array = array_unique($array);
foreach($array as $key => $value)
{
  echo $value;
}
?>