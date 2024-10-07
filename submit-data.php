<?php
header('Content-Type: application/json');

// File to store concussion data
$dataFile = 'concussion_data.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $rawData = file_get_contents("php://input");
    $data = json_decode($rawData, true);

    if ($data) {
        // Validate required fields (you can add more validation as needed)
        $requiredFields = ['impactId', 'playerInvolved', 'incidentId', 'dateTime'];
        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                echo json_encode(['success' => false, 'message' => "Missing required field: $field"]);
                exit;
            }
        }

        // Read existing data
        $existingData = [];
        if (file_exists($dataFile)) {
            $jsonData = file_get_contents($dataFile);
            $existingData = json_decode($jsonData, true) ?: [];
        }

        // Add new data
        $existingData[] = $data;

        // Save updated data
        if (file_put_contents($dataFile, json_encode($existingData, JSON_PRETTY_PRINT))) {
            echo json_encode(['success' => true, 'message' => 'Data saved successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to save data']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid data received']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>