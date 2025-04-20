<?php

use Google\Client;
use Google\Service\Sheets;

require_once __DIR__ . '/../vendor/autoload.php'; // This loads Composer's autoloader

if (!defined('GOOGLE_APPLICATION_CREDENTIALS')) {
    define('GOOGLE_APPLICATION_CREDENTIALS', __DIR__ . '/credentials.json');
}
if (!function_exists('fetch_data')) {
    function fetch_data()
    {
        $SPREADSHEET_ID = '1GXpN0xxPEaQVk-_Y_wR0S9IL942tDquDgbI8aHnaS5Y';

        // Initialize Client
        $client = new Client();
        $client->setAuthConfig(GOOGLE_APPLICATION_CREDENTIALS);
        $client->addScope(Sheets::SPREADSHEETS_READONLY);
        $service = new Sheets($client);
        $range = 'Sheet1!A1:I';  // Adjust the range to match the data you want

        $response = $service->spreadsheets_values->get($SPREADSHEET_ID, $range);
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

        foreach ($services as &$row) {
            if (!empty($row['Effectives'])) {
                $row['Effectives'] = explode('$', $row['Effectives']); // Split using dollar sign
            }
            if (!empty($row['ImageUrl'])) {
                // $row['ImageUrl'] =convertGoogleDriveImageThumbnail($row['ImageUrl']);
                if (preg_match('/\/d\/(.*?)\//', $row['ImageUrl'], $matches)) {
                    $row['ImageUrl'] = 'https://drive.google.com/thumbnail?id=' . $matches[1];
                } 
          
            }
        }
        return $services;
    }
}
