<?php
// File to store concussion data
$dataFile = 'concussion_data.json';

// Check if the file exists
if (file_exists($dataFile)) {
    // Read the JSON data from the file
    $jsonData = file_get_contents($dataFile);
    $concussionData = json_decode($jsonData, true);

    // Check if there's any data
    if (!empty($concussionData)) {
        foreach ($concussionData as $entry) {
            echo "<div class='concussion-entry'>";
            
            // Impact Data
            echo "<h2>Impact Data</h2>";
            echo "<div class='data-row'><span class='label'>Concussion ID:</span><span class='value'>" . htmlspecialchars($entry['concussionId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Player ID:</span><span class='value'>" . htmlspecialchars($entry['playerId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Location on field:</span><span class='value'>" . htmlspecialchars($entry['location']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Type of play:</span><span class='value'>" . htmlspecialchars($entry['typeOfPlay']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Force of impact:</span><span class='value'>" . htmlspecialchars($entry['forceOfImpact']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Part of body/head impacted:</span><span class='value'>" . htmlspecialchars($entry['bodyPartImpacted']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Helmet data:</span><span class='value'>" . htmlspecialchars($entry['helmetData']) . "</span></div>";

            // Concussion Incident
            echo "<h2>Concussion Incident</h2>";
            echo "<div class='data-row'><span class='label'>Concussion ID:</span><span class='value'>" . htmlspecialchars($entry['concussionId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Player ID:</span><span class='value'>" . htmlspecialchars($entry['playerId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Date and time:</span><span class='value'>" . htmlspecialchars($entry['dateTime']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Symptoms:</span><span class='value'>" . htmlspecialchars($entry['symptoms']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Sideline assessment:</span><span class='value'>" . htmlspecialchars($entry['sidelineAssessment']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Diagnosis:</span><span class='value'>" . htmlspecialchars($entry['diagnosis']) . "</span></div>";

            // Medical Assessments
            echo "<h2>Medical Assessments</h2>";
            echo "<div class='data-row'><span class='label'>Concussion ID:</span><span class='value'>" . htmlspecialchars($entry['concussionId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Player ID:</span><span class='value'>" . htmlspecialchars($entry['playerId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Type of assessment:</span><span class='value'>" . htmlspecialchars($entry['assessmentType']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Date performed:</span><span class='value'>" . htmlspecialchars($entry['assessmentDate']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Results:</span><span class='value'>" . htmlspecialchars($entry['assessmentResults']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Comparison to baseline:</span><span class='value'>" . htmlspecialchars($entry['baselineComparison']) . "</span></div>";

            // Recovery and Return-to-Play
            echo "<h2>Recovery and Return-to-Play</h2>";
            echo "<div class='data-row'><span class='label'>Concussion ID:</span><span class='value'>" . htmlspecialchars($entry['concussionId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Player ID:</span><span class='value'>" . htmlspecialchars($entry['playerId']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Prescribed rest period:</span><span class='value'>" . htmlspecialchars($entry['restPeriod']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Protocol stages:</span><span class='value'>" . htmlspecialchars($entry['protocolStages']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Clearance dates:</span><span class='value'>" . htmlspecialchars($entry['clearanceDates']) . "</span></div>";
            echo "<div class='data-row'><span class='label'>Final clearance date:</span><span class='value'>" . htmlspecialchars($entry['finalClearanceDate']) . "</span></div>";

            echo "</div>"; // Close concussion-entry div
        }
    } else {
        echo "<p>No concussion data available.</p>";
    }
} else {
    echo "<p>No data file found.</p>";
}
?>