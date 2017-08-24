<?php


function generateotpcode($length = 4, $add_dashes = false, $available_sets = 'd')
{
	$sets = array();
	
	if(strpos($available_sets, 'd') !== false)
		$sets[] = '0123456789';
	
	$all = '';
	$password = '';
	foreach($sets as $set)
	{
		$password .= $set[array_rand(str_split($set))];
		$all .= $set;
	}
	$all = str_split($all);
	for($i = 0; $i < $length - count($sets); $i++)
		$password .= $all[array_rand($all)];
	$password = str_shuffle($password);
	if(!$add_dashes)
		return $password;
	$dash_len = floor(sqrt($length));
	$dash_str = '';
	while(strlen($password) > $dash_len)
	{
		$dash_str .= substr($password, 0, $dash_len) . '-';
		$password = substr($password, $dash_len);
	}
	$dash_str .= $password;
	
	return $dash_str;
}


$otpcode=generateotpcode(4,false);
echo $otpcode;
?>