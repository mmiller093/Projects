<?php

function HMSToS($H,$M,$S) {
	$total = 0;
	$total += $S;
	$total += $M*60;
	$total += $H*3600;
	return $total;

}
echo HMSToS(100,2,200)

?>