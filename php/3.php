<?php
function multiply()
{
	$result=1;
    $numargs=func_get_args();
    echo "number of arguments:$numargs\n";
   # if ($numargs>=2) {
   # 	echo "second argument is ".func_get_arg(1)."\n";
    	# code...
   # }
    $arg_list=func_get_args();
    for ($i=0; $i <$numargs ; $i++) { 
    	echo "argument $i is : ".$arg_list[$i]."\n";
    	$result=$result*$arg_list[$i];
    }

    echo "result is".$result."\n";
}
multiply(1,2,3);
?>