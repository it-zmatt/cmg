<?php

use function PHPSTORM_META\type;

require_once __DIR__ . '/../components/Header.php';
require_once __DIR__ . '/../components/Footer.php';
require_once __DIR__ . '/../components/Navbar.php';
require_once __DIR__ . '/../api/fetch_data.php';

function handleError($message, $redirectDelay = 3) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error - CMG Massage Therapy</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-[#F8F9FC]">
        <div class="min-h-screen flex items-center justify-center px-4">
            <div class="max-w-md w-full bg-white rounded-2xl shadow-lg p-8 text-center">
                <svg class="w-16 h-16 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
                <h2 class="text-2xl font-semibold text-[#704B7D] mb-4"><?= htmlspecialchars($message) ?></h2>
                <p class="text-gray-600 mb-6">Redirecting you to the services page in <?= $redirectDelay ?> seconds...</p>
                <a href="/./index.php#services" 
                   class="inline-flex items-center gap-2 bg-[#704B7D] text-[#F8F9FC] px-6 py-3 rounded-lg hover:bg-[#F8F9FC] hover:text-[#704B7D] border-2 border-transparent hover:border-[#704B7D] transition-all duration-300">
                    <span>Return to Services</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                </a>
            </div>
        </div>
        <script>
            setTimeout(() => {
                window.location.href = '/./index.php#services';
            }, <?= $redirectDelay * 1000 ?>);
        </script>
        
    </body>
    </html>
    <?php
    exit;
}

try {
    if (!isset($_GET['index']) || !is_numeric($_GET['index'])) {
        handleError('Invalid service index provided.');
    }

    $index = (int) $_GET['index'];
    $services = array_values(fetch_data()); // ensures zero-based indexing

    if (!isset($services[$index])) {
        handleError("Service at index {$index} was not found.");
    }

    $selectedService = $services[$index];

    // Simulate try-catch fallback for image selection
$defaultImagePath = "/assets/image/default.jpg";
$localImages = [
    'Deep Tissue Massage' => '/assets/image/Deep_Tissue.png',
    'Sports Massage' => '/assets/image/Sports_Massage.png',
    'Swedish Massage' => '/assets/image/Swedish_Massage.png',
];

$imageUrl = $defaultImagePath;
if (isset($selectedService['ServiceName']) && isset($localImages[$selectedService['ServiceName']])) {
    $imageUrl = $localImages[$selectedService['ServiceName']];
}

} catch (Exception $e) {
    handleError('An unexpected error occurred: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php renderHeader(
        $selectedService['ServiceName'] . ' | CMG Massage Therapy Merrickville',
        'Professional ' . $selectedService['ServiceName'] . ' in Merrickville, ON. ' . substr(strip_tags($selectedService['Description1']), 0, 150) . ' Book your massage therapy session today.'
    ); ?>
</head>

<body class="bg-[#F8F9FC]">
<?php renderNavbar(); ?>
<main class="container mx-auto px-4 pt-24 pb-16">




    <div class="grid gap-8 lg:grid-cols-12">
        <!-- Left Column -->
        <div class="lg:col-span-5">
            <div class="relative rounded-2xl overflow-hidden shadow-md bg-white h-96">
                <a href="/index.php#services"
                   class="absolute top-4 left-4 flex items-center space-x-2 px-4 py-2 rounded-lg shadow-lg text-[#F8F9FC] bg-[#704B7D] hover:text-[#704B7D] hover:bg-[#F8F9FC] transition-all group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span class="font-medium">Menu</span>
                </a>

        
               
                <img src="<?= htmlspecialchars($selectedService['ImageUrl']) ?>"
                    alt="<?= htmlspecialchars($selectedService['ServiceName']) ?>"
                    class="w-full h-full object-cover">

            </div>
            <div class="bg-white rounded-2xl mt-8 p-8 shadow-lg">
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <?php if (!empty($selectedService['Price' . $i])): ?>
                            <div class="bg-[#F8F9FC] p-4 rounded-lg">
                                <p class="font-semibold">Session <?= $i ?></p>
                                <p class="text-[#704B7D]">$<?= htmlspecialchars($selectedService['Price' . $i]) ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="lg:col-span-7">
            <div class="grid gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h1 class="text-3xl font-semibold text-[#704B7D] mb-4">
                        <?= htmlspecialchars($selectedService['ServiceName']) ?>
                    </h1>
                    <p class="text-gray-600 mb-6">
                        <?= htmlspecialchars($selectedService['Description1']) ?>
                    </p>
                </div>

                <!-- Benefits Section with Accordion -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-semibold text-[#704B7D] mb-6">Effective in Addressing</h2>
                    
                    <!-- Accordion Items -->
                    <div class="divide-y divide-[#F8F9FC]">
                        <?php foreach ($selectedService['Effectives'] as $benefit): ?>
                            <?php 
                                // Split the benefit text at the colon
                                $parts = explode(':', $benefit);
                                $title = trim($parts[0] ?? '');
                                $description = trim($parts[1] ?? '');
                            ?>
                            <div class="py-2">
                                <button onclick="toggleAccordion(this)" 
                                        class="w-full flex justify-between items-center py-3 text-left hover:text-[#704B7D] transition-all">
                                    <span class="font-medium"><?= htmlspecialchars($title) ?></span>
                                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-200" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden pb-3 text-gray-600 text-sm">
                                    <?= htmlspecialchars($description) ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <p class="text-gray-600 mb-8">
                        <?= htmlspecialchars($selectedService['Description2'] ?? 'This therapy can provide lasting improvements in both physical comfort and overall well-being.') ?>
                    </p>
                    <div class="text-center">
                        <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank"
                           class="inline-block bg-[#704B7D] text-white px-8 py-3 rounded-lg hover:opacity-90 transition-all">
                            Book Your Massage Now
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>
<?php renderFooter(); ?>
<script src="/./js/main.js"></script>
</body>
</html>
