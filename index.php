<?php

include 'PHP/function_set.php';

$word_one="Long";
$word_two="Distance";
$num_one=999;
$num_two=54;


//Call the function addStuff($,$) passing in $num_one & $num_two and output the returned value using echo.
echo "addStuff Function passing in $num_one and $num_two: ", '<b>',addStuff($num_one, $num_two),'</b>', "</br>";
echo "</br>";

//Call the function subtractStuff($,$) passing in $num_one & $num_two and output the returned value using echo
echo "subtractStuff Function passing in $num_one and $num_two: ",'<b>',subtractStuff($num_one, $num_two),'</b>', "</br>";
echo "</br>";

//Call the function concatWords($,$,$) and pass in $word_one, $word_two, argOne and ouput the returned value using echo
echo "concatWords Function: ",'<b>',concatWords($word_one, $word_two,argOne()),'</b>', "</br>";
echo "</br>";

//Call the function addStuff($,$) and pass argOne, argTwo and output the returned value to the screen using echo.
echo "addStuff Function passing in word_one, word_two and argOne: ",'<b>', concatWords($word_one, $word_two,argOne()),'</b>', "</br>";
echo "</br>";

//Call the function addStuff($,$) and pass argOne, argTwo and output the returned value to the screen using echo.
echo "addStuff Function passing in argOne and argTwo: ",'<b>', addStuff(argOne(), argTwo()),'</b>','</br>';
echo '</br>';

//do the same for subtractStuff($,$)
echo "subtractStuff Function passing in argOne and argTwo: ",'<b>', subtractStuff(argOne(), argTwo()),'</b>','</br>';
echo '</br>';

//call concatWords($,$,$)  passing argOne, argTwo, $word_two
echo "concatWords Function passing in argOne, argTwo, word_two: ",'<b>',concatWords(argOne(),argTwo(),$word_two),'</b>', "</br>";

?>
