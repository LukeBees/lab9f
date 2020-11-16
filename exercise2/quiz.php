<?php

check();

function check()
{
	$c = 0; //total correct answers
	$t = 5; //total questions

	$q1a = $_POST["q1"]; //get user response to question 1
	$q1c = "Leonie Rysanek"; //correct answer to question 1
	echo "Question 1: Which singer never sang Brunnhilde? <br>";
	echo "Selected Answer: " , $q1a , "<br>";
	echo "Correct Answer: " , $q1c , " <br>";
	if($q1a == $q1c)
	{
		$c = $c + 1;
	}

	$q2a = $_POST["q2"];
	$q2c = "Vienna";
	echo "Question 2: Which city is home to the Musikverein, itself home to its city's famous Philharmonic? <br>";
	echo "Selected Answer: ", $q2a, "<br>";
	echo "Correct Answer: ", $q2c, "<br>";
	if($q2a == $q2c)
	{
		$c = $c + 1;
	}

	$q3a = $_POST["q3"];
	$q3c = "Land of Confusion";
	echo "Question 3: Which Genesis video was based on the satirical show Spitting Image? <br>";
	echo "Selected Answer: ", $q3a , "<br>";
	echo "Correct Answer: ", $q3c, "<br>";
	if($q3a == $q3c)
	{
		$c = $c+1;
	}

	$q4a = $_POST["q4"];
	$q4c = "Hawkwind";
	echo "Question 4: Which space rock group released Silver Machine? <br>";
	echo "Selected Answer: ", $q4a, "<br>";
	echo "Correct Answer: ", $q4c, "<br>";
	if($q4a == $q4c)
	{
		$c = $c+1;
	}

	$q5a = $_POST["q5"];
	$q5c = "(East) Germany";
	echo "Question 5: Where did Karat origin from? <br>";
	echo "Selected Answer: ", $q5a, "<br>";
	echo "Correct Answer: ", $q5c, "<br>";
	if($q5a == $q5c)
	{
		$c = $c+1;
	}


	echo "You answered ", $c, " out of ", $t, " questions correctly. <br>";
	//echo $c, "/", $t, "<br>";
	$per = ($c / $t) * 100;
	echo "Percent = ", $per, "%<br>";


}
?>
