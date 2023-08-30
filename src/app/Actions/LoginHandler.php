<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\Authentication;

// Constants for actions
define('VALIDATE_LOGIN', 'validateLogin');

// Initialize the response
$response = [];

if(isset($_POST['action']) && $_POST['action'] === VALIDATE_LOGIN) {
  // Validate client-side token: reCAPTCHA
  $action = $_POST['action'];
  $ctoken = $_POST['ctoken'];
    
  $client = new Authentication();
  $validateRecaptcha = $client->verifyRecaptha($action, $ctoken);

  if($validateRecaptcha['success']) {
    // Validate user credentials: against database
    $userCredentials = [
      'uname' => filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES),
      'pword' => filter_input(INPUT_POST, 'pword', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)
    ];

    $user = new Authentication();
    $validationResult = $user->validateLoginRequest($userCredentials);
    //check validation result against database
    if($validationResult['validated']) {
      $response = ['userValidated' => true, 'management' => $validationResult['management'], 'message' => $validationResult['message']];
    } else {
      $response = ['userValidated' => false, 'message' => $validationResult['message']];
    }
  } else {
    $response = ['success' => false, 'message' => $validateRecaptcha['message']];
  }
}


header('Content-Type: application/json');
echo json_encode($response);
