<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
		<title>Hello World in PHP</title>
	</head>
	<body>
		<?php
			require_once ('vendor/autoload.php');
			 
			use com\realexpayments\hpp\sdk\domain\HppRequest;
			use com\realexpayments\hpp\sdk\RealexHpp;
			 
			$hppRequest = ( new HppRequest() )
			    ->addMerchantId( "realexsandbox" )
			    ->addAccount( "internet" )
			    ->addAmount( "1001" )
			    ->addCurrency( "EUR" )
			    ->addAutoSettleFlag( "1" );
			 
			$realexHpp = new RealexHpp( "secret" );
			 
			$requestJson = $realexHpp->requestToJson( $hppRequest );
		?>
	</body>
</html>
