<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost/rest-api-authentication-example/");
header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Controll-Allow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization,X-Requested-With");

// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/user.php';

// get database connection
$database = new Database();
$db = $database -> getConnection();

// instantiate product object
$user = new User($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));

// set product property values

$user-> firstname = $data-> firtsname;
$user-> lastname = $data -> lastname;
$user -> email = $data -> email;
$user -> password = $data -> password;

// create the user
if 
    // condition
(
    !empty($user -> firstname ) &&
    !empty($user -> email) &&
    !empty($user -> password) &&
    $user -> create()

)
    // do block
    {
 
        // set response code


}
