<?php
function RGB($A,$B,$C){
	if($A>255)
		$A=255;
	if($B>255)
		$B=255;
	if($C>255)
		$C=255;
	$res=array(($A/16)%16,($A)%16,($B/16)%16,($B)%16,($C/16)%16,($C)%16);
	$not=array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");
	$ans="";
	for($v=0;$v<6;$v++){
		$ans=$ans.($not[$res[$v]]);
	}
	return $ans;
}
echo "#".RGB(0,255,255);

?>