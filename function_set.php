<?php

//Create a function called argOne which takes no arguments and will return the value 5280
function argOne(){
	 $mileHigh=5280;
	return $mileHigh;
	}


//Create a function called argTwo which takes no arguments and returns the value 25
function argTwo(){
	$myAge=25;
	return $myAge;

	}

//Create a function called addStuff which takes two arguments and adds them together returning the SUM

function addStuff($add1stNum, $add2ndNum){

	return $add1stNum + $add2ndNum;

	}



//Create a function called subtractStuff which takes two arguments and subtracts them returning the total.
function subtractStuff($subtract1stNum,$subtract2ndNum){

		return $subtract1stNum - $subtract2ndNum; 		

	}



//Create a function called concatWords which takes 3 arguments, concatenates the arguments together, and then returns the final value.
function concatWords($_1stwordConcat,$_2ndwordConcat, $_3rdwordConcat){

			return $_1stwordConcat .' ' . $_2ndwordConcat . ' ' . $_3rdwordConcat;
	}


	//debugging below
	// echo argOne(), '</br> ';
	// echo argTwo(), '</br>';
	// echo addStuff(10,111), '</br> ';
	// echo subtractStuff(20,1), '</br> ';
	// echo concatWords('Fort Collins', 'Boulder', 'Denver'), '</br> ';

?>
