<?php
$nazwa_pliku = "image.x";
if(file_exists($nazwa_pliku))
{
	print file_get_contents($nazwa_pliku);
}
?>