<?php
$crossmap = [
// I used Maestro-1337's 1.50 Crossmap: https://github.com/Maestro-1337/GTA-V-1.51-Crossmap/tree/e6eb87d2f3f7a26dbb854ec58801a5cf898b94e6
];

$crosstable = [
// I used 272's crosstable: https://www.unknowncheats.me/forum/2886621-post8487.html
];

foreach($crossmap as $og_hash => $_1_50_hash)
{
	if(array_key_exists($_1_50_hash, $crosstable))
	{
		$crossmap[$og_hash] = $crosstable[$_1_50_hash];
	}
	else
	{
		unset($crossmap[$og_hash]);
	}
}

$str = "";
foreach($crossmap as $og_hash => $hash)
{
	$str .= "{ ".$og_hash.", ".$hash." },\n";
}
file_put_contents("crossmap.hpp", $str);
