<?php
function renderServiceCard($service, $index) {
    // Simulate a try-catch logic using fallback handling
    $defaultImagePath = "/assets/images/default.jpg";
    $localImages = [
        'Deep Tissue Massage' => './assets/image/Deep_Tissue.png',
        'Sports Massage' => './assets/image/Sports_Massage.png',
        'Swedish Massage' => './assets/image/Swedish_Massage.png',
    ];

    // Choose image based on service name if available, fallback to default
    $imageUrl = $defaultImagePath;
    if (isset($service['ServiceName']) && isset($localImages[$service['ServiceName']])) {
        $imageUrl = $localImages[$service['ServiceName']];
    }

    $detailUrl = "./components/Services.php?index={$index}";
    ?>
    <div class="snap-center shrink-0 first:pl-4 last:pr-4">
        <div class="w-80 bg-white my-5 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.12)] overflow-hidden transform transition-all duration-300 hover:scale-105">
            <div class="relative h-48">
            <img src="<?= htmlspecialchars($service['ImageUrl']) ?>"
                     alt="<?= htmlspecialchars($service['ServiceName'] ?? 'Service image') ?>"
                     loading="lazy"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
            <div class="p-8">
                <h3 class="text-2xl font-semibold text-[#704B7D] mb-4">
                    <?= htmlspecialchars($service['ServiceName'] ?? 'Service') ?>
                </h3>
                <p class="text-gray-600 text-sm line-clamp-3 mb-6">
                    <?= htmlspecialchars($service['Description1'] ?? 'No description available') ?>
                </p>
                <a href="<?= htmlspecialchars($detailUrl) ?>" 
                   class="inline-block w-full text-center px-6 py-3 rounded-lg bg-[#704B7D] text-[#F8F9FC] hover:border-[#704B7D] hover:bg-[#F8F9FC] hover:text-[#704B7D] border-2 transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    <?php
}
?>
