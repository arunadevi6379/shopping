<?php
error_reporting(0);
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');
include('api10.php');
$requestMethod= $_SERVER["REQUEST_METHOD"];
if($requestMethod=="GET"){
if (isset($_GET['id'])){
$customer=getcustomer($_GET);
echo $customer;
}
else{
$Customerlist=getCustomerlist();
echo $Customerlist;
}
}
else{
	$data=[
		'status'=>405,
		'message'=>$requestMethod.'Method Not Allowed',
		];
		header("HIIP/1.0 405 Method Not Allowed");
		echo json_encode($data);
		
		}
		// echo"working";
		?>