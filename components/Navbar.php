<?php
function renderNavbar() {
    ?>
    <header class="fixed w-full top-0 z-50 bg-[#F8F9FC]/95 backdrop-blur-sm border-b border-[#704B7D]/10">
        <nav class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo Section -->
                <div class="flex-shrink-0">
                    <a href="/index.php" class="block">
                        <img src="/assets/image/LogoPositiv.png" alt="CMG Massage Therapy" class="h-12">
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button type="button" 
                        class="lg:hidden p-2 rounded-lg text-[#704B7D] hover:bg-[#704B7D]/10 border-2 border-transparent hover:border-[#704B7D] transition-all duration-300" 
                        onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex lg:items-center lg:gap-12">
                    <?php
                    $navItems = [
                        ['href' => '/index.php#about', 'text' => 'About'],
                        ['href' => '/index.php#services', 'text' => 'Treatments'],
                        ['href' => '/index.php#direction', 'text' => 'Contact Us']
                    ];

                    foreach ($navItems as $item) {
                        echo <<<HTML
                        <a href="{$item['href']}" 
                           class="text-[#704B7D] hover:text-[#704B7D]/80 font-small transition-colors relative group">
                            {$item['text']}
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#704B7D] group-hover:w-full transition-all duration-300"></span>
                        </a>
                        HTML;
                    }
                    ?>
                </div>

                <!-- Find Us Button -->
                <div class="hidden lg:block">
                    <a href="#" id="GPS" 
                    class="inline-flex items-center gap-2 bg-[#704B7D] text-[#F8F9FC] px-8 py-3 rounded-lg hover:bg-[#F8F9FC] hover:text-[#704B7D] hover:border-[#704B7D] border-2 border-transparent transition-all duration-300 group">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Find Us</span>
                    </a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden lg:hidden">
                <div class="py-4 space-y-4">
                    <?php
                    foreach ($navItems as $item) {
                        echo <<<HTML
                        <a href="{$item['href']}" 
                           class="block text-[#704B7D] hover:bg-[#704B7D]/10 px-4 py-2 rounded-lg transition-all">
                            {$item['text']}
                        </a>
                        HTML;
                    }
                    ?>
                    <a href="#" id="mobileGPS" 
                       class="block bg-[#704B7D] text-[#F8F9FC] px-4 py-2 rounded-lg hover:bg-[#F8F9FC] hover:text-[#704B7D] border-2 border-transparent hover:border-[#704B7D] transition-all duration-300">
                        Find Us
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }

        // Handle scroll behavior
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 0) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });

        // Update GPS links based on device
        function getDeviceType() {
            const userAgent = navigator.userAgent || navigator.vendor || window.opera;
            if (/iPhone|iPad|iPod/.test(userAgent)) return 'ios';
            if (/android/i.test(userAgent)) return 'android';
            return 'desktop';
        }

        function updateGPSLinks() {
            const deviceType = getDeviceType();
            const address = '290+Snowdon+Dr%2C+290+Snowdon+Dr+Merrickville+ON+K0G+1N0+Canada';
            let link = '';

            switch(deviceType) {
                case 'ios':
                    link = `http://maps.apple.com/?daddr=${address}`;
                    break;
                case 'android':
                case 'desktop':
                default:
                    link = `https://www.google.com/maps/dir/?api=1&destination=${address}`;
                    break;
            }

            document.getElementById('GPS').href = link;
            const mobileGPS = document.getElementById('mobileGPS');
            if (mobileGPS) mobileGPS.href = link;
        }

        // Initialize GPS links on page load
        window.addEventListener('load', updateGPSLinks);
    </script>

    <style>
        @media (max-width: 1024px) {
            #mobileMenu {
                animation: slideDown 0.3s ease-out;
            }
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <?php
}
?>
