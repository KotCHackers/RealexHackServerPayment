<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
		<title>Hello World in PHP</title>
	</head>
	<body>
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
	</body>
</html>