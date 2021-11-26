<?php

#################################################################
# DrCode Script written by Crawlerbasher of Asura				#
# This is for the Doctor/Administrator Status on the apparatus.	#
# In Final Fantasy XI											#
# This Code is open source and is avilable for free				#
# www.stateofmind.me.uk											#
#################################################################


//Creating a function to convert letters to numbers
	function Letter2number($abc) {
		//A = 00
	$abc =	str_replace('a','00',$abc);
	$abc =	str_replace('A','00',$abc);
		//B = 01
	$abc =			str_replace('b','01',$abc);
			$abc =	str_replace('B','01',$abc);
		//C = 02
			$abc =	str_replace('c','02',$abc);
			$abc =	str_replace('C','02',$abc);
		//D = 03
			$abc =	str_replace('d','03',$abc);
			$abc =	str_replace('D','03',$abc);
		//E = 04
			$abc =	str_replace('e','04',$abc);
			$abc =	str_replace('E','04',$abc);
		//F = 05
			$abc =	str_replace('f','05',$abc);
			$abc =	str_replace('F','05',$abc);
		//G = 06
			$abc =	str_replace('g','06',$abc);
			$abc =	str_replace('G','06',$abc);
		//H = 07
			$abc =	str_replace('h','07',$abc);
			$abc =	str_replace('H','07',$abc);
		//I = 08
			$abc =	str_replace('i','08',$abc);
			$abc =	str_replace('I','08',$abc);
		//J = 09
			$abc =	str_replace('j','09',$abc);
			$abc =	str_replace('J','09',$abc);
		//K = 10
			$abc =	str_replace('k','10',$abc);
			$abc =	str_replace('K','10',$abc);
		//L = 11
			$abc =	str_replace('l','11',$abc);
			$abc =	str_replace('L','11',$abc);
		//M = 12
			$abc =	str_replace('m','12',$abc);
			$abc =	str_replace('M','12',$abc);
		//N = 13
			$abc =	str_replace('n','13',$abc);
			$abc =	str_replace('N','13',$abc);
		//O = 14
			$abc =	str_replace('o','14',$abc);
			$abc =	str_replace('O','14',$abc);
		//P = 15
			$abc =	str_replace('p','15',$abc);
			$abc =	str_replace('P','15',$abc);
		//Q = 16
			$abc =	str_replace('q','16',$abc);
			$abc =	str_replace('Q','16',$abc);
		//R = 17
			$abc =	str_replace('r','17',$abc);
			$abc =	str_replace('R','17',$abc);
		//S = 18
			$abc =	str_replace('s','18',$abc);
			$abc =	str_replace('S','18',$abc);
		//T = 19
			$abc =	str_replace('t','19',$abc);
			$abc =	str_replace('T','19',$abc);
		//U = 20
			$abc =	str_replace('u','20',$abc);
			$abc =	str_replace('U','20',$abc);
		//V = 21
			$abc =	str_replace('v','21',$abc);
			$abc =	str_replace('V','21',$abc);
		//W = 22
			$abc =	str_replace('w','22',$abc);
			$abc =	str_replace('W','22',$abc);
		//X = 23
			$abc =	str_replace('x','23',$abc);
			$abc =	str_replace('X','23',$abc);
		//Y = 24
			$abc =	str_replace('y','24',$abc);
			$abc =	str_replace('Y','24',$abc);
		//Z = 25
			$abc =	str_replace('z','25',$abc);
			$abc =	str_replace('Z','25',$abc);
		
		return $abc;
	}
?>