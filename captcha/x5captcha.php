<?php
include("../res/x5engine.php");
$nameList = array("hez","m6a","57l","vjg","ux8","dld","3dg","63k","652","amn");
$charList = array("F","5","H","K","C","G","3","G","V","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
