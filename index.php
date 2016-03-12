<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
		<title>Hello World in PHP</title>
	</head>
	<body>
		<?php

			require_once('vendor/autoload.php');
			
			use com\realexpayments\hpp\sdk\domain\HppRequest;
			use com\realexpayments\hpp\sdk\RealexHpp;

			$hppRequest = ( new HppRequest() )
			    ->addMerchantId( "myMerchantId" )
			    ->addAccount( "mySubAccount" )
			    ->addAmount( "1001" )
			    ->addCurrency( "EUR" )
			    ->addAutoSettleFlag( "1" );

			$supplementaryData = array();
			$supplementaryData['key1'] = 'value1';
			$supplementaryData['key2'] = 'value2';

			$hppRequest->addSupplementaryData( $supplementaryData );    

			$realexHpp = new RealexHpp( "mySecret" );
			$requestJson = $realexHpp->requestToJson( $hppRequest );
		?>
	</body>
</html>
