<?php
$B		=ARRAY();
$B[10]	=7;
$B[9] 	=7;
$B[17]	=6;
$B[11]	=6;
$B[23]	=3;
$B[27]	=4;
$flip	=true;
$C 		= array();
foreach($B as $v=>$k) $C[]=array($v,$k);
while($flip)
{
	$start	= true;
	$flip	= false;
	foreach ($C as $k=>$v)
	{
		if (!$start)
		{
			$k1= $C[$prevK][1]; 
			$k2= $C[$k][1];
			if ($k1 > $k2)
			{
				$tmp	 	= $C[$prevK];
				$C[$prevK]	= $C[$k];
				$C[$k]		= $tmp;
				$flip		= true;
			}
		}
		$start = false;
		$prevK = $k;
	}
}
$B = array();
foreach($C as $v=>$k)
{
	$p1 	= $k[0];
	$p2 	= $k[1];
	$B[$p1] = $p2;
}
foreach ($B as $k=>$v) print "B[".$k."] => ". $v. "<br/>";