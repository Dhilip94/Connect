
<?php 
$string = "https://t.co/KzdGJj8SuB Alt_Estateare bringing #blockchain advantages to #realestate 

#IAMPlatform
#TopInfluenceâ€¦ https://t.co/uxmJ422OTe";

preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $string, $match);
echo "<pre>";
print_r($match[0]); 
echo "</pre>";

echo $match[0][0].'<br>';
$full=end($match[0]);
echo "<a href=$full>a</a><br>";


?>

<?php
$datetime1 = new DateTime(); // Today's Date/Time
$datetime2 = new DateTime('2012-07-17 15:30:17');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%D days %H hours %I minutes ago');
?>

<?php

	
$datetime1 = new DateTime();
	$str=strtotime("Sat Mar 24 10:48:14 +0000 2007");
$datetime2 = date("Y-m-d  h:i:s",$str);
$datetime3 = new DateTime($datetime2);
	echo date("Y-m-d  h:i:s",$str);
$interval = $datetime1->diff($datetime3);
echo $interval->format('%D days %H hours %I minutes ago');



	?>