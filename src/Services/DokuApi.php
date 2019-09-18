<?php namespace Dyandra\Dokulib\Services;

use Dyandra\Dokulib\Services\DokuLib;
use Dyandra\Dokulib\Services\DokuInit;
/**
 * Api for doku communications
 */
class DokuApi {

	public static function doPrePayment($data){

		$data['req_basket'] = DokuLib::formatBasket($data['req_basket']);

		$ch = curl_init( DokuInit::prePaymentUrl );
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, 'data='. json_encode($data));
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

		$responseJson = curl_exec( $ch );

		curl_close($ch);

		return json_decode($responseJson);
	}

	public static function doPayment($data){

		$data['req_basket'] = DokuLib::formatBasket($data['req_basket']);

		$ch = curl_init( DokuInit::paymentUrl );
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, 'data='. json_encode($data));
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

		$responseJson = curl_exec( $ch );

		curl_close($ch);

		if(is_string($responseJson)){
			return json_decode($responseJson);
		}else{
			return $responseJson;
		}

	}

	public static function doDirectPayment($data){

		$ch = curl_init( DokuInit::directPaymentUrl );
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, 'data='. json_encode($data));
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

		$responseJson = curl_exec( $ch );

		curl_close($ch);

		if(is_string($responseJson)){
			return json_decode($responseJson);
		}else{
			return $responseJson;
		}

	}

	public static function doGeneratePaycode($data){

		$ch = curl_init( DokuInit::generateCodeUrl );
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, 'data='. json_encode($data));
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

		$responseJson = curl_exec( $ch );

		curl_close($ch);

		if(is_string($responseJson)){
			return json_decode($responseJson);
		}else{
			return $responseJson;
		}

	}
}
