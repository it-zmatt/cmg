<?php
require_once __DIR__ . '/../api/fetch_data.php';

function getActiveServices() {
    $jsonPath = __DIR__ . '/../config/services.json';
    if (!file_exists($jsonPath)) {
        return [];
    }
    
    $json = file_get_contents($jsonPath);
    $data = json_decode($json, true);
    
    return $data['services'] ?? [];
}

function renderFooter() {
    $services = getActiveServices();
    $currentPage = $_SERVER['REQUEST_URI'];
    ?>
    <footer class="bg-[#F8F9FC] text-[#704B7D] py-16">
        <div class="container mx-auto px-6 ">
            <!-- Top Footer Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[3vw] w-[80vw] mx-auto">
                <!-- Brand Section -->
                <div class="space-y-6">
                    <img src="/assets/image/LogoPositiv.png" alt="CMG Massage Therapy" class="h-14">
                    <p class="text-[#704B7D]/70 text-sm leading-relaxed">
                    An eco-conscious massage therapy clinic dedicated to your well-being and a healthier planet.
                    </p>
                    <!-- Social Links -->
                    <div class="flex space-x-4">
                        <a href="#" class="text-[#704B7D]/70 hover:text-[#704B7D] transition-all">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div class="space-y-6">
                    <h4 class="text-base font-medium">Our Services</h4>
                    <ul class="space-y-3">
                        <?php 
                        $services = fetch_data();
                        foreach ($services as $index => $service): 
                            $isActive = isset($_GET['index']) && (int)$_GET['index'] === $index;
                            $activeClass = $isActive ? 'text-[#704B7D] font-medium' : 'text-[#704B7D]/70';
                        ?>
                            <li>
                                <a href="/components/Services.php?index=<?= $index ?>" 
                                   class="<?= $activeClass ?> hover:text-[#704B7D] transition-colors text-sm inline-flex items-center gap-2">
                                    <?php if ($isActive): ?>
                                        <span class="w-1.5 h-1.5 bg-[#704B7D] rounded-full"></span>
                                    <?php endif; ?>
                                    <?= htmlspecialchars($service['ServiceName']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="space-y-6">
                    <h4 class="text-base font-medium">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/index.php#about" class="text-[#704B7D]/70 hover:text-[#704B7D] transition-colors text-sm">About Us</a></li>
                        <li><a href="/index.php#services" class="text-[#704B7D]/70 hover:text-[#704B7D] transition-colors text-sm">Our Services</a></li>
                        <li><a href="/index.php#direction" class="text-[#704B7D]/70 hover:text-[#704B7D] transition-colors text-sm">Location</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <h4 class="text-base font-medium" id="contact">Contact Us</h4>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="h-5 w-5 mt-0.5 flex-shrink-0 text-[#704B7D]/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-sm text-[#704B7D]/70">290 Snowdon Drive East<br>Merrickville, ON. K0G 1N0</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="h-5 w-5 flex-shrink-0 text-[#704B7D]/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+16138002018" class="text-sm text-[#704B7D]/70 hover:text-[#704B7D] transition-colors">+1-613-800-2018</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="h-5 w-5 flex-shrink-0 text-[#704B7D]/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:Info@cmgmassagetherapy.com" class="text-sm text-[#704B7D]/70 hover:text-[#704B7D] transition-colors">Info@cmgmassagetherapy.com</a>
                        </div>
                    </div>
                    <!-- Book Now Button -->
                    <div class="pt-2">
                        <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank" 
                           class="inline-flex items-center gap-2 bg-[#704B7D] text-white px-6 py-2.5 rounded-lg hover:bg-[#5d3e68] transition-colors text-sm">
                            <span>Book Your Massage</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-[#704B7D]/10 mt-12 pt-8">
                <p class="text-[#704B7D]/60 text-sm">
                    © <?php echo date('Y'); ?> CMG Massage Therapy. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <?php
}
?> 