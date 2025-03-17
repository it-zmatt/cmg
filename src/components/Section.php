<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMG Massage Therapy</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CPW742VFLZ"></script> 
    <script> 
        window.dataLayer = window.dataLayer || []; 
        function gtag(){dataLayer.push(arguments);} 
        gtag('js', new Date()); 
        gtag('config', 'G-CPW742VFLZ'); 
    </script>
    <script>
    function getDeviceType() {
      const userAgent = navigator.userAgent || navigator.vendor || window.opera;
      if (/iPhone|iPad|iPod/.test(userAgent)) return 'ios';
      if (/android/i.test(userAgent)) return 'android';
      return 'desktop';
    }

    function updateLink() {
      const deviceType = getDeviceType();
      const link = deviceType === 'ios' 
        ? `http://maps.apple.com/?daddr=290+Snowdon+Dr%2C+290+Snowdon+Dr+Merrickville+ON+K0G+1N0+Canada`
        : `https://www.google.com/maps/dir/?api=1&destination=290+Snowdon+Dr%2C+290+Snowdon+Dr+Merrickville+ON+K0G+1N0+Canada`;
      document.querySelector('[data-gps]').href = link;
    }
    window.onload = updateLink;

    function toggleAccordion(element) {
        const content = element.nextElementSibling;
        const icon = element.querySelector('.accordion-icon');
        
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
    </script>
</head>

<body class="bg-[#F8F9FC]">
    <header class="fixed w-full top-0 bg-white shadow-sm z-50">
        <nav class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <button type="button" class="lg:hidden">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="../../public/index.php#about" class="px-4 py-2 rounded-lg bg-white text-[#704B7D] hover:bg-[#704B7D] hover:text-white transition-all">About</a>
                    <a href="../../public/index.php#treatments" class="px-4 py-2 rounded-lg bg-white text-[#704B7D] hover:bg-[#704B7D] hover:text-white transition-all">Treatments</a>
                    <a href="../../public/index.php#direction" class="px-4 py-2 rounded-lg bg-white text-[#704B7D] hover:bg-[#704B7D] hover:text-white transition-all">Contact Us</a>
                </div>
                <a href="#" data-gps class="bg-[#704B7D] text-white px-4 py-2 rounded-lg hover:opacity-90 transition-all">
                    Open GPS
                </a>
            </div>
        </nav>
    </header>
    
    <main class="container mx-auto px-4 pt-24 pb-16">
        <div class="grid gap-8 lg:grid-cols-12">
            <!-- Left Column - Image (30%) -->
            <div class="lg:col-span-5">
                <div class="relative rounded-2xl overflow-hidden shadow-md bg-white">
                    <a href="../../public/index.php#about" class="absolute top-4 left-4 flex items-center space-x-2 px-4 py-2 bg-white rounded-lg shadow-lg hover:bg-[#704B7D] hover:text-white transition-all group">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span class="font-medium">Menu</span>
                    </a>
                    <img src="/public/assets/image/fulldeep.png" alt="Deep Tissue Massage" class="w-full h-full object-cover">
                </div>
                <div class="bg-white rounded-2xl mt-8 p-8 shadow-lg">
                    <!-- Pricing Grid -->
                    <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-[#F8F9FC] p-4 rounded-lg">
                                <p class="font-semibold">30 minutes</p>
                                <p class="text-[#704B7D]">$70.00</p>
                            </div>
                            <div class="bg-[#F8F9FC] p-4 rounded-lg">
                                <p class="font-semibold">45 minutes</p>
                                <p class="text-[#704B7D]">$90.00</p>
                            </div>
                            <div class="bg-[#F8F9FC] p-4 rounded-lg">
                                <p class="font-semibold">60 minutes</p>
                                <p class="text-[#704B7D]">$110.00</p>
                            </div>
                            <div class="bg-[#F8F9FC] p-4 rounded-lg">
                                <p class="font-semibold">90 minutes</p>
                                <p class="text-[#704B7D]">$150.00</p>
                            </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Content (70%) -->
            <div class="lg:col-span-7">
                <div class="grid gap-8">
                    <!-- Title and Description -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h1 class="text-3xl font-semibold text-[#704B7D] mb-4">Deep Tissue Massage</h1>
                        <p class="text-gray-600 mb-6">Deep tissue massage is a focused treatment aimed at releasing chronic tension and addressing deeper layers of muscle and connective tissue. This technique is especially beneficial for individuals dealing with persistent pain, postural issues, or areas of long-standing muscle tightness.</p>
                    </div>

                    <!-- Benefits Section with Accordion -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h2 class="text-2xl font-semibold text-[#704B7D] mb-6">Effective in Addressing</h2>
                        
                        <!-- Slick Accordion Items -->
                        <div class="divide-y divide-[#F8F9FC]">
                            <!-- Chronic Pain -->
                            <div class="py-2">
                                <button onclick="toggleAccordion(this)" 
                                        class="w-full flex justify-between items-center py-3 text-left hover:text-[#704B7D] transition-all">
                                    <span class="font-medium">Chronic Pain</span>
                                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-200" 
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden pb-3 text-gray-600 text-sm">
                                    Provides relief for conditions such as lower back pain, neck tension, or sciatica.
                                </div>
                            </div>

                            <!-- Postural Imbalances -->
                            <div class="py-2">
                                <button onclick="toggleAccordion(this)" 
                                        class="w-full flex justify-between items-center py-3 text-left hover:text-[#704B7D] transition-all">
                                    <span class="font-medium">Postural Imbalances</span>
                                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-200" 
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden pb-3 text-gray-600 text-sm">
                                    Corrects muscular imbalances caused by poor posture or repetitive strain.
                                </div>
                            </div>

                            <!-- Injuries -->
                            <div class="py-2">
                                <button onclick="toggleAccordion(this)" 
                                        class="w-full flex justify-between items-center py-3 text-left hover:text-[#704B7D] transition-all">
                                    <span class="font-medium">Injuries</span>
                                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-200" 
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden pb-3 text-gray-600 text-sm">
                                    Aids in the recovery of strains, sprains, or overuse injuries.
                                </div>
                            </div>

                            <!-- Scar Tissue -->
                            <div class="py-2">
                                <button onclick="toggleAccordion(this)" 
                                        class="w-full flex justify-between items-center py-3 text-left hover:text-[#704B7D] transition-all">
                                    <span class="font-medium">Scar Tissue</span>
                                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-200" 
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden pb-3 text-gray-600 text-sm">
                                    Breaks down adhesions and improves tissue elasticity.
                                </div>
                            </div>

                            <!-- Limited Mobility -->
                            <div class="py-2">
                                <button onclick="toggleAccordion(this)" 
                                        class="w-full flex justify-between items-center py-3 text-left hover:text-[#704B7D] transition-all">
                                    <span class="font-medium">Limited Mobility</span>
                                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-200" 
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden pb-3 text-gray-600 text-sm">
                                    Restores range of motion by releasing restrictions in deep muscle layers.
                                </div>
                            </div>

                            <!-- Stress and Tension -->
                            <div class="py-2">
                                <button onclick="toggleAccordion(this)" 
                                        class="w-full flex justify-between items-center py-3 text-left hover:text-[#704B7D] transition-all">
                                    <span class="font-medium">Stress and Tension</span>
                                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-200" 
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="hidden pb-3 text-gray-600 text-sm">
                                    Eases mental and physical stress through targeted pressure.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conclusion and Booking Section -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <p class="text-gray-600 mb-8">
                            Deep tissue massage is ideal for those seeking targeted relief from persistent issues or looking to restore balance and function to the body. With its precise, intentional approach, this therapy can provide lasting improvements in both physical comfort and overall well-being.
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
</body>

</html>
