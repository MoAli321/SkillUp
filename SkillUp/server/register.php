<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: Content-Type');

include 'db_connect.php';

// Get raw JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Check if the required fields are present in the JSON data
if (isset($data['firstname'], $data['lastname'], $data['email'], $data['password'])) {
    $first_name = $data['firstname'];
    $last_name = $data['lastname'];
    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students1(first_name, last_name, email, password_hash) VALUES (?, ?, ?, ?)";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters and execute the statement
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
        if ($stmt->execute()) {
            // Return a success response as JSON
            echo json_encode(["success" => true, "message" => "Record created successfully"]);
        } else {
            // Return a failure response as JSON
            echo json_encode(["success" => false, "message" => "Failed to create record"]);
        }
        // Close the statement
        $stmt->close();
    } else {
        // Return a failure response as JSON
        echo json_encode(["success" => false, "message" => "Failed to prepare statement"]);
    }
} else {
    // Return a failure response as JSON
    echo json_encode(["success" => false, "message" => "Required fields are missing"]);
}

// Close the connection
$conn->close();
?>
