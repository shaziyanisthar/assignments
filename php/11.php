<html>
<head>
<title>Find Largest number in an Array</title>
</head>
<body>
	Enter the Numbers separated by Commas <br />
	<br /><br />
	<form method="post">
		<input type="text" name="numbers"/>
		<button type="submit">Check</button>
	</form>
</body>
</html>
 
<?php 
	
	if($_POST)
	{
		$numbers = $_POST['numbers'];
		$numArray = explode(',', $numbers);
		
		
		$largest  = $numArray[0];
		foreach($numArray as $num){
			
			
			if($num > $largest){
				$largest = $num;
			}	
		} 
		echo "Largest Number is: $largest <br />";
 
	}
	
	
 
?>