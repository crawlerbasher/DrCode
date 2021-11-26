<?php

#################################################################
# DrCode Script written by Crawlerbasher of Asura				#
# This is for the Doctor/Administrator Status on the apparatus.	#
# In Final Fantasy XI											#
# This Code is open source and is avilable for free				#
# www.stateofmind.me.uk											#
#################################################################

	require('Letter2Number.php');
	
		//Getting information from form
		$l1 = $_POST['1Letter'];
		$l2 = $_POST['2Letter'];
		$l3 = $_POST['3Letter'];

		//Running though the function
		$x = Letter2Number($l1);
		$y = Letter2Number($l2);
		$z = Letter2Number($l3);
		$w = $_POST['zone'];

		//Adding letter and zone together
		$xw = $x + $w;
		$yw = $y + $w;
		$zw = $z + $w;

		//Adding leading 0 on single numbers
		$first = str_pad($xw, 2, '0', STR_PAD_LEFT);
		$secound = str_pad($yw, 2, '0', STR_PAD_LEFT);
		$thrid = str_pad($zw, 2, '0', STR_PAD_LEFT);
		$zoneID = str_pad($w, 2, '0', STR_PAD_LEFT);
		$xyz = $first + $secound + $thrid + $zoneID;
		
		//Keeping the last 2 digits
		if (strlen($xyz) > 2) {
			$zone = substr($xyz, -2);
		} else $zone = $xyz;
		
		//Adding leading 0 on single numbers
		$zoneNum = str_pad($zone, 2, '0', STR_PAD_LEFT);
		
		//Outputting Results
	echo "Your Doctor/Administrator Status on the apparatus is: ". $first.$secound.$thrid.$zoneNum;
?>