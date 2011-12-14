<?php
include('Paypal.class.php');
include('PaypalPayment.class.php');

$ppPaymentObj = new PaypalPayment(true);

$paymentType = $_GET['payment'];

switch($paymentType){
	
	case 'paypal':
		$ppPaymentObj->getExpressInfo($_GET['token']);
		
		$ppPaymentObj->print_rp($ppPaymentObj->getBillingInfo());
		
		$ppPaymentObj->print_rp($ppPaymentObj->getShippingInfo());
		
		break;
		
	case 'card':
		
		break;
}
?>
<a href="confirm.php?payment=<?= $paymentType; ?>">Yes, Place Order!</a>