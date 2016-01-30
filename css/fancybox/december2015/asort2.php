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
foreach ($B as $k=>$v) print   "B["  .$k. "]=>". $v."<br/>";
print  "<hr/>";
while($flip)
{
	$ctr++;	
	if ($ctr>10) exit;
	foreach ($B as $k=>$v) print   "B["  .$k. "]=>". $v."<br/>";
	print  "<hr/>";	
	$C		= array();

	foreach ($B as $k=>$v)
	{
		if ($start)
		{
			$prevK = $k;
			$prevV = $v;	
		}
		else
		{
		if ($v < $prevV)
			{
				$C[$k]  = $v;
				print "1.set c[".$k."]=".$v."<br/>";
				$flip	= true;
			}
			else
			{
				$C[$prevK]=$prevV;	
				print "2.set c[".$prevK."]=".$prevV."<br/>";
				$prevK = $k;
				$prevV = $v;	
			}
		}   
		$start = false;
        foreach ($C as $k=>$v) print "C[".$k."]=>".$v."<br/>";
	}
}
foreach ($B as $k=>$v) print   "B["  .$k. "]=>". $v."<br/>";
print  "<hr/>";