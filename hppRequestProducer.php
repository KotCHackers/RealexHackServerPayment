<?php
	require_once ('vendor/autoload.php');
			 
	use com\realexpayments\hpp\sdk\domain\HppRequest;
	use com\realexpayments\hpp\sdk\RealexHpp;
			 
	$hppRequest = ( new HppRequest() )
		->addMerchantId( "hackathon12" )
		->addAccount( "internet" )
		->addAmount( "1001" )
		->addCurrency( "EUR" )
		->addAutoSettleFlag( "1" );
			 
	$realexHpp = new RealexHpp( "secret" );
			 
	$requestJson = $realexHpp->requestToJson( $hppRequest );
?>