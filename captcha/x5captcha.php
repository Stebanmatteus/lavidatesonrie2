<?php
include("../res/x5engine.php");
$nameList = array("33r","4ha","2lx","5sl","5yc","efy","h24","u7y","dzv","ruf");
$charList = array("A","S","Z","E","M","A","S","7","7","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
