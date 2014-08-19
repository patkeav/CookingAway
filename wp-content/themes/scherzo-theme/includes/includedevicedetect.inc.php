<?php
        //declare that $deviceDetect is going to be a global variable, for use elsewhere on the page//
global $deviceDetect;
	//create a variable called deviceDetect, and set it to zero//
$deviceDetect=0; 
 
	//start detecting various devices//
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad"); 
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$blackberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");	
$mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
 
    //set devicetype for phones//
if ($mobile && $android || $iphone || $ipod || $blackberry)  {
	$deviceDetect=1;
	}
 
	//set devicetype for tablets//	
if ($ipad || !$mobile && $android)  {
	$deviceDetect=2;
	}
 
	//devices are detected, now create outcomes - THIS CODE CAN BE REUSED ON THE PAGE//
if ($deviceDetect==0)
	{
	//whatever you want to happen to desktop browsers// 
               echo('<link rel="stylesheet" href="styles/style.css">');
	}
if ($deviceDetect==1)
	{
	//whatever you want to happen to mobile phones// 
               echo('<link href="styles/mobile.css" type="text/css" rel="stylesheet" /> <meta name="viewport" content="width=device-width" />');
			   
	}
if ($deviceDetect==2)
	{
	//whatever you want to happen to iPad & Android Tablet// 
               echo('<link rel="stylesheet" href="styles/style.css"> <meta name="viewport" content="width=device-width, maximum-scale=1.0" />'); 
	}
	
	$done=0;
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
if ($browser == true)  {
	$done=1;
	}
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
if ($browser == true)  {
	$done=1;
	}
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if ($browser == true)  {
	$done=1;
	}
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
if ($browser == true)  {
	$done=1;
	}	
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
if ($browser == true)  {
	$done=2;
	}
?>