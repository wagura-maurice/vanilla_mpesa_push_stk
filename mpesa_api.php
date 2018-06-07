<?php

require "vendor/autoload.php";

use SmoDav\Mpesa\C2B\STK;
use GuzzleHttp\Client;
use SmoDav\Mpesa\Engine\Core;
use SmoDav\Mpesa\Native\NativeCache;
use SmoDav\Mpesa\Native\NativeConfig;

$config = new NativeConfig();
$cache = new NativeCache($config);
$engine = new Core(new Client, $config, $cache);
$stk = new STK($engine);
    
// one function
//$response = $stk->push(10, 254722000000, 'f4u239fweu', 'Test Payment');

if (isset($_POST['amount'])) {
	$amount = $_POST['amount'];
	$phone = "254".substr($_POST['phone'], -9);
	// fluent implementation
	$response = $stk->request($amount)
	    ->from($phone)
	    ->usingReference('f4u239fweu', 'Test Payment')
	    ->push();
	}

if(isset($_GET['confirm'])){

	$id= trim($_GET['confirm']);

	$response = $stk->validate($id);

	echo "<pre>";
	print_r($response);

}

?>

<a href="?confirm=<?php echo $response->CheckoutRequestID?>"> confirm </a>