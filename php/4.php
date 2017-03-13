<html>
<?
rec(1); 
function rec($n)
{
	echo $n,"<br>";
    if ($n <100)
    { 
 		return rec($n+1);
  	}
  	else
  		echo "done!!!";
}  
?>
</html>

