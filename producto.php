<?php
    define ("limite",12);
	$num = (int) $_POST['cdnumber'];
	$i=1;
	$result=0;
	while($i<=limite)
	{
		$result = $num * $i;
		echo "<p>".$num." x ".$i." = ".$result."</p>";
		$i++;
	} 
?>

