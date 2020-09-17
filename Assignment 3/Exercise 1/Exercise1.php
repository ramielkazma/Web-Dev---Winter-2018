<html>

<head>
<title>Assignment 3</title>
</head>

<body>

<h4>A. Function computeFactorial</h4>
<?php

function computeFactorial($number)
{
	//The least factorial (ie $number = 0) would be 1
	$factorial = 1;
	
	//if the number is 0 or a positive integer
	if(is_int($number) && $number >= 0)
	{
		if ($number == 0)
			return 1;
		else
		{
			for($x = $number; $x > 0; $x--)
				$factorial = $factorial * $x;
			return $factorial;
		}	
	}
	else 
	{
		echo "False";
		return false;
	}
}

echo computeFactorial(5);
?>

<h4>B. Function findMostFrequent</h4>
<?php

function findMostFrequent($arr)
{
	//turns all the words in the string array
	//to lower case for case insensitivity
	for($x = 0; $x < count($arr); $x++)
		$arr[$x] = strtolower($arr[$x]);
	sort($arr);
	
	//$count is the number of times the word is repeated
	//$mostFrequent is the word that is most frequent
	$count = 0;
	$mostFrequent = "";
	
	//compare words in the sorted array and update the
	//value of count if the there is a word that occurs
	//more frequently than the previous one
	for($i = 0; $i < count($arr)-1; $i++)
	{
		$currentCount = 0;
		for($j = $i+1; $j < count($arr); $j++)
		{
			if($arr[$i] == $arr[$j])
				$currentCount++;
			else break;
		}
		if($currentCount > $count)
		{
			$count = $currentCount;
			$mostFrequent = $arr[$i];
		}
	}
	
	$count++;
	return ($mostFrequent.": ".$count." time(s)");
}

echo findMostFrequent(array("am", "hello", "am", "that", "hello"));
?>

<h4>C. Function toUppercaseFirst</h4>
<?php

function toUpperCase($string)
{
	$string = ucwords(strtolower($string));
	return $string;
}

echo toUpperCase("hElLo wOrLd!");
?>

<h4>D. Function splitCapitalizeSort</h4>
<?php

function splitCapitalizeSort($string)
{
	$string = strtolower($string);
	$arr = array();
	$index = 0;
	
	//while string is not empty
	while($string != "")
	{
		//insert the first word that is separated by a space into
		//the array and remove it from the string and loop
		$arr[$index] = ucwords(rtrim($string, strstr($string," ")));
		$string = ltrim(strstr($string," "));
		$index++;
	}
	sort($arr);	
	return ($arr);
}

print_r (splitCapitalizeSort("How are you doing"));
?>

<h4> E. Function dayOfNextFriday</h4>
<?php

function dayOfNextFriday()
{
	$date = date_create('2018-04-13');
	echo ("The date today is Friday, ".date_format($date, 'd/m/Y').".<br/>");
	date_add($date, date_interval_create_from_date_string('7 days'));
	echo ("Next week it will be Friday, ".date_format($date, 'd/m/Y').".<br/>");
}

dayOfNextFriday();
?>

<h4> F. Function findUniqueAndSort</h4>
<?php

function findUniqueAndSort($intArray)
{
	sort($intArray);
	$element = 0;
	
	for($i = 0; $i < count($intArray); $i++)
	{
		//if there is a match, increment compared value $element
		//to avoid repetition of the term.
		if($intArray[$i] == $element)
		{
			print ($element);
			if($intArray[$i] == $intArray[count($intArray)-1])
				print (".");
			else
				print (", ");
			$element++;
		}
		//else if we scanned the array for current value
		//of $element, we increment element and repeat the
		//process by returning $i to 0
		else 
			if($i+1 == count($intArray))
			{
				$element++;
				$i=-1;
			}
	}	
}

findUniqueAndSort(array(1,3,2,1,3,1));
?>

<h4> G. Function sortHash1</h4>
<?php

function sortHash1($assocArray)
{
	?> <table style = "border: 1px solid black" "border-collapse:collapse">
	<?php
	//sort the array based on value and print in a table in sorted order
	asort($assocArray);
	foreach($assocArray as $key=>$value)
	{
		?> 
		<tr>
			<td style = "border: 1px solid black" "border-collapse:collapse">
				<?php echo $key; ?>
			</td>
			<td style = "border: 1px solid black" "border-collapse:collapse">
				<?php echo $value ?>
			</td>
		</tr>
		<?php
	}
	?> </table> <?php
}

sortHash1(array("Peter" => "37000", "Ben" => "35000", "Joe" => "43000"));
?>

<h4> H. Function sortHash2</h4>
<?php

function sortHash2($assocArray, $code)
{
	//switch statement testing the different codes as cases
	switch ($code)
	{
		case 1:
			asort($assocArray);
			break;
		case 2:
			ksort($assocArray);
			break;
		case 3:
			arsort($assocArray);
			break;
		case 4:
			krsort($assocArray);
			break;
		default:
			echo "Wrong Code";
			return;
	}
	return $assocArray;
}

print_r (sortHash2((array("Peter" => "37", "Ben" => "35", "Joe" => "43")),6));
?>

<h4> I. Function averageTemp</h4>
<?php

function averageTemp($assocArray)
{
	sort($assocArray);
	
	//sum is used to calculate the average
	//lowestTemp and highestTemp are strings that output the temperatures
	$sum = 0;
	$lowestTemp = "";
	$highestTemp = "";
	
	//scan the array and add all the values to $sum
	//input only 4 temperatures to lowestTemp and highestTemp
	//if conditions select the 4 lowest and 4 highest temperatures
	foreach($assocArray as $key=>$value)
	{
		$sum = $sum + $value;
		if($key == 0)
			$lowestTemp = $value;
		if($key <= 3 && $key > 0)
			$lowestTemp = $lowestTemp.", ".$value;
		if($key == count($assocArray)-4)
			$highestTemp = $value;
		if($key >= count($assocArray)-3)
			$highestTemp = $highestTemp.", ".$value;
	}
	$averageTemp = $sum / count($assocArray);
	
	echo ("Average Temperature is: ".$averageTemp."<br/>");
	echo ($lowestTemp.".<br/>");
	echo ($highestTemp.".<br/>");
}

averageTemp(array(78, 60, 62, 68, 71, -17, 52, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68,
                  62, 73, -10, 72, 65, 80,74, 62, 62, 65, 64, 0, 68, 73, 75, 79, 73, 77));
?>

<h4> J. Function findAtStartOrEnd</h4>
<?php

function findAtStartOrEnd($word, $string)
{
	$arr = array();
	$index = 0;
	
	//while the string is not empty
	while($string != "")
	{
		//separate different words in the string and insert them
		//into an array
		$arr[$index] = ucwords(rtrim($string, strstr($string," ")));
		$string = ltrim(strstr($string," "));
		$index++;
	}
	
	//if the word is the same as the first or last in the array
	if($word == $arr[0] || $word == $arr[count($arr)-1])
		return true;
	else return false;
}

if(findAtStartOrEnd("PHP", "I love PHP"))
	print ("True");
else
	print ("False");
?>

</body>

</html>