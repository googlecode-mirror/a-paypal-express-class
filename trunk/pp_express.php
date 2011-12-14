<?php
include('Paypal.class.php');
include('PaypalPayment.class.php');



$ppPaymentObj = new PaypalPayment(true);

$ppPaymentObj->sendToExpress(100.00, 'http://www.mystore.com/paypal/review.php?payment=paypal', 'Mystore.com Order');

?>