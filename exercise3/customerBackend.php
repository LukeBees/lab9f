<?php

//post greeting and user information
$u = $_POST["userN"];
$p = $_POST["userP"];

echo "Hello, " , $u , ". In case you forgot, your password is " , $p , ". <br>";


$full = 0;

echo "<table>", receipt() , "</table>";

function receipt()
{
	//echo "Hellow";
	echo "<tr><td> </td><td>Quantity</td><td>Cost Per Item</td><td>Subtotal</td></tr>";

	$nva = $_POST["nva"];
	$ncda = $_POST["ncda"];
	$ncds = $_POST["ncds"];
	$uva = $_POST["uva"];
	$ucda = $_POST["ucda"];
	$ucds = $_POST["ucds"];
	$ut = $_POST["ut"];

	if($nva > 0)
	{
		$sp = $nva * 14;
		echo "<tr><td>New vinyl album</td><td>", $nva ,"</td><td>$14</td><td>$", $sp, "</td></tr>";
		$full = $full + $sp;
	}

	if($ncda > 0)
	{
		$sp = $ncda * 12;
		echo "<tr><td>New CD album</td><td>", $ncda, "</td><td>$12</td><td>$", $sp, "</td></tr>";
		$full = $full + $sp;
	}

	if($ncds > 0)
	{
		$sp = $ncds * 60;
		echo "<tr><td>New CD player</td><td>", $ncds, "</td><td>$60</td><td>$", $sp, "</td></tr>";
		$full = $full + $sp;
	}

	if($uva > 0)
	{
		$sp = $uva * 8;
		echo "<tr><td>Used vinyl album</td><td>", $uva, "</td><td>$8</td><td>$", $sp ,"</td></tr>";
		$full = $full + $sp;
	}

	if($ucda > 0)
	{
		$sp = $ucda * 6;
		echo "<tr><td>Used CD album</td><td>", $ucda ,"</td><td>$6</td><td>", $sp ,"</td></tr>";
		$full = $full + $sp;
	}

	if($ucds > 0)
	{
		$sp = $ucds * 40;
		echo "<tr><td>Used CD player</td><td>", $ucds,"</td><td>$40</td><td>", $sp ,"</td></tr>";
		$full = $full + $sp;
	}

	if($ut > 0)
	{
		$sp = $ut * 70;
		echo "<tr><td>Used turntable</td><td>", $ut ,"</td><td>$70</td><td>", $sp ,"</td></tr>";
		$full = $full + $sp;
	}

	echo "<tr>" , shipping() , "</tr>";
	echo "<tr><td> Total Cost </td><td>$", $full, "</td></tr>";

}


function shipping()
{
	echo "<td>Shipping</td>";
	$ship = $_POST["ship"];
	//echo $ship;

	if ($ship == "one")
	{
		echo "<td>Overnight</td> <td>$0</td>";
		$full = $full;
	}
	else if ($ship == "seven")
	{
		echo "<td>Seven-day</td><td>$50</td>";
		$full = $full + 50;
	}
	else if ($ship == "three")
	{
		echo "<td>Three-day</td><td>$5</td>";
		$full = $full + 5;
	}
}

?>
