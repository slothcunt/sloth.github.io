<?php 

$secret_key = "Sloths20022002";
$sharexdir = "";
$domain_url = 'https://badvibes.xyz/';
$lengthofstring = 4;

function RandomString($length) {
	$keys = array_merge(range(0,9), range('a', 'z'));
	
	for($i=0; $i < $length; $i++) {
		$key .= $keys[mt_rand(0, count($keys) - 1)];
	}
	return $key;
	
}

if(isset($_POST['secret']))
{
	if($_POST['secret'] == $secret_key)
	{
		$filename = RandomString($lengthofstring);
		$target_file = $_FILES["sharex"]["name"];
		$fileType = pathinfo($target_file, PATHINFO_EXTENTION);
		
		if (moved_uploaded_file($_FILES["sharex"]["tmp_name"], $sharexdir.$filename.'.'.$fileType))
