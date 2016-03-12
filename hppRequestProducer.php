<?php
	require_once ('vendor/autoload.php');
			 
	use com\realexpayments\hpp\sdk\domain\HppRequest;
	use com\realexpayments\hpp\sdk\RealexHpp;
	
	$hppRequest = ( new HppRequest() )
		->addCardStorageEnable( "1" )
		->addOfferSaveCard( "0" )
		->addPayerExists( "0" )
		->addMerchantId( "hackathon12" )
		->addAccount( "internet" )
		->addAmount( $_POST['AMOUNT'] )
		->addCurrency( $_POST['CURRENCY'] )
		->addAutoSettleFlag( "1" );

	$realexHpp = new RealexHpp( "secret" );
			 
	$requestJson = $realexHpp->requestToJson( $hppRequest );
	echo $requestJson
?>