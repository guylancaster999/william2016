<?php
$B		=ARRAY();
$B[10]	=7;
$B[9] 	=7;
$B[17]	=6;
$B[11]	=6;
$B[23]	=3;
$B[27]	=4;
$flip	=true;
$ctr	=0;


while($flip)
{
	$start	= true;
	$flip	= false;
	foreach ($B as $k=>$v)
	{
		if (!$start)
		{
			if ($B[$prevK] < $B[$k])
			{
				$tmp	 	= $B[$prevK];
				$B[$prevK]	= $B[$k];
				$B[$k]		= $tmp;
				$flip		= true;
			}
		}
		$start = false;
		$prevK = $k;
	}
}
foreach ($B as $k=>$v) print   "B["  .$k. "]=>". $v. "<br/>";
