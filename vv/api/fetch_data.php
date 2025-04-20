<?php
// Load Google API
require_once __DIR__ . '/../vendor/autoload.php';

// Google API Configuration
if (!defined('GOOGLE_APPLICATION_CREDENTIALS')) {
    define('GOOGLE_APPLICATION_CREDENTIALS', __DIR__ . '/credentials.json');
}
if (!defined('SPREADSHEET_ID')) {
    define('SPREADSHEET_ID', '1GXpN0xxPEaQVk-_Y_wR0S9IL942tDquDgbI8aHnaS5Y');
}

use Google\Client;
use Google\Service\Sheets;

/**
 * Creates and configures a Google API client
 * 
 * @return Google\Client The configured client
 */
if (!function_exists('getClient')) {
    function getClient() {
        $client = new Client();
        $client->setAuthConfig(GOOGLE_APPLICATION_CREDENTIALS);
        $client->addScope(Sheets::SPREADSHEETS_READONLY);
        return $client;
    }
}

/**
 * Converts Google Drive file link to thumbnail URL
 */
if (!function_exists('convertGoogleDriveThumbnail')) {
    function convertGoogleDriveThumbnail($url) {
        if (preg_match('/\/d\/(.*?)\//', $url, $matches)) {
            return 'https://drive.google.com/thumbnail?id=' . $matches[1];
        }
        return $url;
    }
}

/**
 * Fetches data from Google Sheets and structures it
 */
if (!function_exists('fetch_data')) {
    function fetch_data() {
        $client = getClient();
        $sheets = new Sheets($client);
        $range = 'Sheet1!A1:Z'; // Adjust range as needed

        $response = $sheets->spreadsheets_values->get(SPREADSHEET_ID, $range);
        $values = $response->getValues();

        if (empty($values)) {
            return false;
        }

        $headers = array_shift($values);
        $services = [];

        foreach ($values as $row) {
            $row = array_combine($headers, $row + array_fill(0, count($headers), ''));

            if (!empty($row['Effectives'])) {
                $row['Effectives'] = explode('$', $row['Effectives']);
            }

            if (!empty($row['ImageUrl'])) {
                $row['ImageUrl'] = convertGoogleDriveThumbnail($row['ImageUrl']);
            }

            $services[] = $row;
        }

        return $services;
    }
}
?>
