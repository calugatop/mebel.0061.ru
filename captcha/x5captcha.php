<?php
include("../res/x5engine.php");
$nameList = array("ynh","x5y","f8d","fcp","r7v","c6y","d6v","g65","xsw","zeh");
$charList = array("5","J","2","D","3","8","G","Z","G","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
