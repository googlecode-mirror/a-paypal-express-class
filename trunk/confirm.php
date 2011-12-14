<?php
include('Paypal.class.php');
include('PaypalPayment.class.php');

$orderID = $_GET['orderID'];
$amount = 100.00;

$ppPaymentObj = new PaypalPayment(true);

$paymentType = $_GET['payment'];

switch($paymentType){
	
	case 'paypal':
		echo 'Express Transaction: ' . $ppPaymentObj->confirmExpress($amount, $orderID);
		
		break;
		
	case 'card':
		$ppPaymentObj->setCardInfo('4111111111111111', 'Visa', '122015', '111');
		$ppPaymentObj->setBillingInfo('John', 'Doe', 'None', '123 Any Street', 'Anytown', 'CA', '90000', 'US');
		echo 'Direct Transaction: ' . $ppPaymentObj->payWithCard($amount, $orderID);
		
		break;
}