<?php
use Google\Client;
use Google\Service\Sheets;

require __DIR__ . '/../../vendor/autoload.php'; // This loads Composer's autoloader
require_once __DIR__ . '/../../config.php';

// Initialize Client
$client = getClient();
$service = new Sheets($client);
$range = 'Sheet1!A1:I';  // Adjust the range to match the data you want

$response = $service->spreadsheets_values->get(SPREADSHEET_ID, $range);
$values = $response->getValues();

if (empty($values)) {
    echo json_encode(["error" => "No data found."]);
    exit;
}

// Extract headers (first row)
$headers = array_shift($values); 
$services = [];

foreach ($values as $row) {
    $services[] = array_combine($headers, $row + array_fill(0, count($headers), '')); // Ensure keys match even if row is shorter
}

function convertGoogleDriveThumbnail($url) {
    if (preg_match('/\/d\/(.*?)\//', $url, $matches)) {
        return 'https://drive.google.com/thumbnail?id=' . $matches[1];
    }
    return $url;
}



foreach ($services as &$row) {
    if (!empty($row['Effectives'])) {
        $row['Effectives'] = explode('$', $row['Effectives']); // Split using dollar sign
    }
    if (!empty($row['ImageUrl'])) {
        $row['ImageUrl'] =convertGoogleDriveThumbnail($row['ImageUrl']);

    }
}

