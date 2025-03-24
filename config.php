<?php
define('GOOGLE_APPLICATION_CREDENTIALS', __DIR__ . '/credentials.json');
define('SPREADSHEET_ID', '1GXpN0xxPEaQVk-_Y_wR0S9IL942tDquDgbI8aHnaS5Y');

require_once __DIR__ . '/vendor/autoload.php';

function getClient() {
    $client = new Google\Client();
    $client->setAuthConfig(GOOGLE_APPLICATION_CREDENTIALS);
    $client->addScope(Google\Service\Sheets::SPREADSHEETS_READONLY);
    return $client;
}
?>
