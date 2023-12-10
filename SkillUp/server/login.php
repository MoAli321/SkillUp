<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: Content-Type');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db_connect.php';

// Get raw JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Check if the required fields are present in the JSON data
if (isset($data['email'], $data['password'])) {
    $email = $data['email'];
    $password = $data['password'];

    // Fetch the user from the database based on the provided email
    $sql = "SELECT * FROM students1 WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the user exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password_hash'])) {
                // Password is correct
                echo json_encode(["success" => true, "message" => "Login successful"]);
                header('Location: http://localhost:3000/home');
            } else {
                // Password is incorrect
                echo json_encode(["success" => false, "message" => "Invalid password"]);
            }
        } else {
            // User not found
            echo json_encode(["success" => false, "message" => "User not found"]);
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
