<?php

$requestMethod = $_SERVER["REQUEST_METHOD"];
$requestUri = $_SERVER["REQUEST_URI"];

switch ($requestMethod) {
    case 'POST':
        if (strpos($requestUri, '/api/student/create') !== false) {
            include 'api/student/create.php';
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Endpoint not found."]);
        }
        break;

    // Add other cases for GET, PUT, DELETE as needed

    default:
        http_response_code(405); // Method Not Allowed
        echo json_encode(["message" => "Method not allowed."]);
        break;
}

?>
