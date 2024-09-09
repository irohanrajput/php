<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../config/Database.php';
include_once '../../models/Student.php';
include_once '../../helpers/ResponseHelper.php';

// Initialize the database connection
$database = new Database();
$db = $database->getConnection();

// Initialize Student object
$student = new Student($db);

// Get posted data
$data = json_decode(file_get_contents("php://input"));

// Validate input
if (!empty($data->name) && !empty($data->registration_id)) {
    $student->name = $data->name;
    $student->registration_id = $data->registration_id;

    if ($student->create()) {
        ResponseHelper::sendResponse(201, "Student created successfully.");
    } else {
        ResponseHelper::sendResponse(503, "Unable to create student.");
    }
} else {
    ResponseHelper::sendResponse(400, "Incomplete data. Name and Registration ID are required.");
}

?>
