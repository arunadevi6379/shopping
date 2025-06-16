<?php
error_reporting(0);
require'api1.php';
function error422($message){
	$data=[
		'status'=>422,
		'message'=>$message,
	];
	header("HTTP/1.0 422 Unprocessable Entity");
	echo json_encode($data);
	exit();
}
function storeCustomer($customerInput) { // Define a function to store customer data.
    global $conn; // Access the global database connection variable.

    // Escape input values to prevent SQL injection.
    $title = mysqli_real_escape_string($conn, $customerInput['title']);
    $description = mysqli_real_escape_string($conn, $customerInput['description']);
    // $phone = mysqli_real_escape_string($conn, $customerInput['phone']);
    // $gender = mysqli_real_escape_string($conn, $customerInput['gender']);
    // $country = mysqli_real_escape_string($conn, $customerInput['country']);
    // $interests = isset($customerInput['interests']) ? implode(", ", $customerInput['interests']) : '';

    if (empty(trim($title))) { // Check if username is empty.
        return error422('Enter your title'); // Return an error if empty.
    } elseif (empty(trim($description))) { // Check if email is empty.
        return error422('Enter your description'); // Return an error if empty.
    // } elseif (empty(trim($phone))) { // Check if phone is empty.
    //     return error422('Enter your phone'); // Return an error if empty.
    // } elseif (empty(trim($gender))) { // Check if gender is empty.
    //     return error422('Select your gender'); // Return an error if empty.
    // } elseif (empty(trim($country))) { // Check if country is empty.
    //     return error422('Select your country'); // Return an error if empty.
    } else { // Proceed if all fields are filled.
        $query = "INSERT INTO login (title,description) VALUES ('$title','$description')"; // SQL query to insert customer data.
        $result = mysqli_query($conn, $query); // Execute the query.
        
        if ($result) { // Check if the query was successful.
            $data = [ // Prepare response data for successful insertion.
                'status' => 201,
                'message' => 'Customer created successfully',
            ];
            header("HTTP/1.0 201 Created"); // Set HTTP response header for created resource.
            return json_encode($data); // Return success message as JSON.
        } else { // If the query failed.
            $data = [ // Prepare response data for error.
                'status' => 500,
                'message' => 'Internal server error',
            ];
            header("HTTP/1.0 500 Internal Server Error"); // Set HTTP response header for server error.
            return json_encode($data); // Return error message as JSON.
        }
    } // End of else block for input validation.
} // End of storeCustomer function.
//api function storecustomer

//echo("working");
// function getCustomer($customerParams){
// 	global $conn;
// 	if ($customerParams['id']==null){
// 		return error422('Enter your customerid');
// 	}
// 	$customerId=mysqli_real_escape_string($conn,$query);
// 	$query="SELECT *FROM login WHERE id='$customerId' LIMIT 1";
// 	$result=mysqli_query($conn,$query);
// 	if($result){
// 		if(mysqli_num_rows($result)==1){
// 			$res=mysqli_fetch_assoc($result);
// 			$data=[
//             'status'=>200,
//             'message'=>'Customer fetched Successfully';
//             'data'=>$res
// 			];
// 			header("HTTP/1.0 200 Ok");
// 			return json_encode($data);
// 		}
		
// 		else{
// 			$data=[
// 				'status'=>404,
// 				'message'=>'No Customers Found',
// 			];
// 			header("HTTP/1.0 404 NOT FOUND");
// 			return json_encode($data);
// 		}
// 	}else{
// 		$data=[
// 			'status'=>500,
// 			'message'=>'Internal Server Error',
// 		];
// 		header("HTTP/1.0 500 Internal Server Error");
// 		return json_encode($data);
// 	}
// }
function getCustomerList(){
	global $conn;
	$query="SELECT *FROM login";
	$result=mysqli_query($conn,$query);
	if($result){
		if(mysqli_num_rows($result)>0){
			$res=mysqli_fetch_all($result,MYSQLI_ASSOC);
			$data=[
				'status'=>200,
                 'message'=>'Customer list fetched Successfully',
                 'data'=>$res
			];
			header("HTTP/1.0 200 OK");
			return json_encode($data);

		}else{
			$data=[
				'status'=>404,
			    'message'=>'No Customers Found',
			];
		
	
// 	function getCustomerlist(){
// 		global $conn;
// 		$query="SELECT *FROM login";
// 		$result=mysqli_query($conn.$query);
// 		if($result){
// 			if(mysqli_num_rows($result)>0){
// 				$res=mysqli_fetch_all($result,MYSQLI_ASSOC
// 				);
// 				$data=[
// 					'status'=>200,
// 				    'message'=>'Customer list fetched Successfully',
// 				    'data'=>$res 
// 				];
// 				header("HTTP/1.0 200 OK");
// 				return json_encode($data);
// 			}else{
// 				$data=[
// 					'status'=>404,
// 				    'message'=>'NO CUSTOMERS FOUND',
// 				];
				header("HTTP/1.0 404 NO CUSTOMERS FOUND");
				return json_encode($data);
			}
		}
		
		else{
			$data=[
				'status'=>405,
			    'message'=>$requestMethod.'Method Not Allowed',
			];
			header("HTTP/1.0 405 Method Not Allowed");
			return json_encode($data);
		}
	}
	function updatecustomer($customerInput,$customerParams){
		global $conn;
		if(!isset($customerParams['id'])){
			return error422('customer id is not found in URL');
		}else if($customerParams['id']==null){
			return error422('Enter the customer id');
		}
		$customerId=mysqli_real_escape_string($conn,$customerParams['id']);
		$name=mysqli_real_escape_string($conn,$customerInput['name']);
		$email=mysqli_real_escape_string($conn,$customerInput['email']);
		$phone=mysqli_real_escape_string($conn,$customerInput['phone']);
		if(empty(trim($name))){
			return error422('Enter your name');
		}else if(empty(trim($email))){
			return error422('Enter your email');

		}else if(empty(trim($phone))){
			return error422('Enter your phone');

	}
	else{
		$query="UPDATE login SET name='$name',email='$email',phone='$phone' WHERE id='$customerId' LIMIT 1";

		$result=mysqli_query($conn,$query);
		if($result){
			$data=[
				'status'=>200,
			     'message'=>'Customer Updated Successfully',

			 ];
			 header("HTTP/1.0 200 Updated");
			 return json_encode($data);
		}
		else{
			$data=[
				'status'=>500,
			     'message'=>'Internal Server Error',
			 ];
			 header("HTTP/1.0 500 Internal Server Error");
			 return json_encode($data);
		}
	}
}
//echo"working";
function deleteCustomer($customerParams){
	global $conn;
	if(!isset($customerParams['id'])){
		return error422('Customer id is not found in URL');
	}elseif($customerParams['id']==null){
		return error422('Enter the Customer id');
	}
	$customerId=mysqli_real_escape_string($conn,$customerParams['id']);
	$query="DELETE FROM login WHERE id ='$customerId'LIMIT 1";
	$result=mysqli_query($conn,$query);
	if($result){
		$data=[
			'status'=>200,
			'message'=>'Customer Deleted Successfully',
		];
		header("HTTP/1.0 404 Not Found");
		return json_encode($data);

	}
}
//echo"working";
?>