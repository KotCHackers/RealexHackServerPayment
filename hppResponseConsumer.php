<?php
	require_once ('vendor/autoload.php');
 
	use com\realexpayments\hpp\sdk\domain\HppResponse;
	use com\realexpayments\hpp\sdk\RealexHpp;
			 
	$realexHpp = new RealexHpp("secret");
			 
	$hppResponse = $realexHpp->responseFromJson(responseJson); // responseJson will be the PHP variable containing the JSON response string

	$result = $hppResponse->getResult();
	$message = $hppResponse->getMessage();
	$authCode = $hppResponse->getAuthCode();
?>