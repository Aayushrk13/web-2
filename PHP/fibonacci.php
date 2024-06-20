<?php
	$pos=15;
	if($pos==1){echo "0";}
	if($pos==2){echo "1";}
	$a=0;	//first
	$b=1;	//second
	$num=0;
	while($pos>2){
		$num=$a+$b;
		$a=$b;
		$b=$num;
		$pos--;
	}
	echo $num;
?>
