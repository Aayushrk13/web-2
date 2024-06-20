<?php
	$number=103;
	$temp=$number;
	$sum=0;
	while($number>=1){
		$sum=$sum+($number%10)*($number%10)*($number%10);
		$number=$number/10;
	}
	if($sum==$temp){
		echo "The number is armsstrong";
	}else{
		echo "The number is not armsstrong";
	}
?>