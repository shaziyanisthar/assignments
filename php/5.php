<html>
<head>fibanocci</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>enter limit</td>
				<td><input type="text" name="limit"></td>
			</tr>
		
		<?php
			$n = $_POST['limit'];
			function fibanocci($n) 
			{
			$first=0;
			$second=1;
			echo "fibonocci series\n";
			echo $first.' '.$second.' ';
			for ($i=2; $i<$n; $i++)
			{ 
				$third=$first + $second;
				echo $third.' ';
				$first=$second;
				$second=$third;
			}
			} fibanocci($n);
		?>	
		</table>
</form>
</body>	

