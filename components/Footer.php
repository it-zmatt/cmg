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
        <div class="container mx-auto px-4">
            <!-- Top Footer Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Brand Section -->
                <div class="space-y-4">
                    <img src="/assets/image/LogoPositiv.png" alt="CMG Massage Therapy" class="h-16 mb-4">
                    <p class="text-[#704B7D]/80 text-sm leading-relaxed">
                        Eco-friendly massage therapy clinic for comfort, well-being, and a greener future. Professional care in a serene environment.
                    </p>
                    <!-- Social Links -->
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="bg-[#F8F9FC]/10 p-2 rounded-full hover:bg-[#F8F9FC]/20 transition-all">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/index.php#about" class="text-[#704B7D]/80 hover:text-[#704B7D] transition-colors">About Us</a></li>
                        <li><a href="/index.php#services" class="text-[#704B7D]/80 hover:text-[#704B7D] transition-colors">Our Services</a></li>
                        <li><a href="/index.php#direction" class="text-[#704B7D]/80 hover:text-[#704B7D] transition-colors">Location</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">Our Services</h4>
                    <ul class="space-y-3">
                        <?php 
                        $services = fetch_data();
                        foreach ($services as $index => $service): 
                            $isActive = isset($_GET['index']) && (int)$_GET['index'] === $index;
                            $activeClass = $isActive ? 'text-[#704B7D] font-medium' : 'text-[#704B7D]/80';
                        ?>
                            <li>
                                <a href="/components/Services.php?index=<?= $index ?>" 
                                   class="<?= $activeClass ?> hover:text-[#704B7D] transition-colors flex items-center gap-2">
                                    <?php if ($isActive): ?>
                                        <span class="w-1 h-1 bg-[#704B7D] rounded-full"></span>
                                    <?php endif; ?>
                                    <?= htmlspecialchars($service['ServiceName']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">Contact Us</h4>
                    <div class="space-y-4">
                        <p class="flex items-center gap-3 text-[#704B7D]/80">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            290 Snowdon Drive East<br>Merrickville, ON. K0G 1N0
                        </p>
                        <p class="flex items-center gap-3 text-[#704B7D]/80">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +1-613-800-2018
                        </p>
                    </div>
                    <!-- Book Now Button -->
                    <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank" 
                       class="inline-flex mt-4 items-center gap-2 bg-[#704B7D] text-[#F8F9FC] px-6 py-3 rounded-lg hover:bg-[#F8F9FC] hover:text-[#704B7D] border-2 border-transparent hover:border-[#704B7D] transition-all duration-300 group">
                        <span>Book Your Session</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-[#704B7D]/10 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <!-- Copyright -->
                    <p class="text-[#704B7D]/60 text-sm">
                        © <?php echo date('Y'); ?> CMG Massage Therapy. All rights reserved.
                    </p>
                    <!-- Additional Links -->
                    <div class="flex gap-6 text-sm text-[#704B7D]/60">
                        <a class="hover:text-[#704B7D] transition-colors">Privacy Policy</a>
                        <a  class="hover:text-[#704B7D] transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php
}
?> 