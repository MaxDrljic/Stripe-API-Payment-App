<?php
  require_once('vendor/autoload.php');

  $api_key = API_KEY;

  \Stripe\Stripe::setApiKey('sk_test_6GjnziHNWtypyczw0iDWspR9');

  // Sanitize POST Array
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $first_name = $POST['first_name'];
  $last_name = $POST['last_name'];
  $email = $POST['email'];
  $token = $POST['stripeToken'];

// Create Customer in Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => 5000,
  "currency" => "usd",
  "description" => "Buy this product for [$50]",
  "customer" => $customer->id
));

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);

