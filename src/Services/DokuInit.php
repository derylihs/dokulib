<?php namespace Dyandra\Dokulib\Services;
/**
 * Initiate Doku data's
 */
class DokuInit {

	//local
	const prePaymentUrl = 'https://staging.doku.com/api/payment/PrePayment'; // doku wallet
	const paymentUrl = 'https://staging.doku.com/api/payment/paymentMip'; //kartu kredit
	const directPaymentUrl = 'https://staging.doku.com/api/payment/PaymentMIPDirect';
	const generateCodeUrl = 'https://staging.doku.com/api/payment/doGeneratePaymentCode'; // virtual account+alfa

	public static $sharedKey; //doku's merchant unique key
	public static $mallId; //doku's merchant id

}
