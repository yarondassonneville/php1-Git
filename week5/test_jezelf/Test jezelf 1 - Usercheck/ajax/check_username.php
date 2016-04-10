<?php
	include_once('../classes/User.class.php');

	$user = new User();

	if(!empty($_POST['username']))
	{
	$user->Username = $_POST['username'];
	try {
			$user->UsernameAvailable();
			$user->Create();
			$response['status'] = 'success';
			$response['message'] = "Created your account";
		}
	catch (Exception $e){
		$feedback = $e->getMessage();
		$response['status'] = "error";
		$response['message'] = $feedback;
	}

	header('Content-Type: application/json');
	echo json_encode($response); // {status: 'error', message: ''}
}
?>