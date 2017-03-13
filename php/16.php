<html>
<head>
<title>concat</title>
</head>
<body>
	Enter enter two words <br />
	<br /><br />
	<form method="post">
		<input type="text" name="wordone"/>
		<input type="text" name="wordtwo"/>
		<button type="submit">submit</button>
	</form>
	<?php
	if($_POST)
	{
	$wordone = $_POST['wordone'];
	$wordtwo = $_POST['wordtwo'];
	$concat=$wordone.$wordtwo;
	echo "after concatination:   ";
	echo $concat ."<br>";

	if (strpos($wordtwo, $wordone) !== false)
	{
    echo '       it is substring' ."<br>" ;
    echo  "<br>". "    after removing:    ";
    $trimmed=str_replace($wordone,' ', $wordtwo);
    echo $trimmed;
	}
    else echo "     it isnt";
}
?>
</body>
</html>
 