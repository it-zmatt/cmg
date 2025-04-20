<?php
require './components/Header.php';
require './components/Footer.php';
require './components/Navbar.php';
require './components/Card.php';
require './api/fetch_data.php';

// Replace JSON loading with fetch_data
$data = fetch_data();

if (!$data) {
    die('Error: Unable to fetch services data');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php renderHeader(
        'CMG Massage Therapy | Professional RMT in Merrickville, ON',
        'Expert massage therapy in Merrickville, ON. Specializing in Swedish, Deep Tissue, and Sports massage. Book your therapeutic massage with our Registered Massage Therapist today. Convenient location at 290 Snowdon Dr.'
    ); ?>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body class="bg-[#F8F9FC]">
    
    <section class="hidden">
        <h1>CMG Massage Therapy - Merrickville's Premier Massage Therapy Clinic</h1>
        <p>Professional massage therapy services in Merrickville, Ontario. Registered Massage Therapist providing Swedish massage, deep tissue massage, and sports massage therapy.</p>
        <address>
            290 Snowdon Drive East<br>
            Merrickville, ON K0G 1N0<br>
            Phone: <a href="tel:+16138002018">613-800-2018</a>
        </address>
    </section>

    <header class="fixed w-full top-0 z-50 bg-[#F8F9FC]/95 backdrop-blur-sm border-b border-[#704B7D]/10">
        <nav class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo Section -->
                <div class="flex-shrink-0">
                    <a href="#hero" class="block">
                        <img src="./assets/image/LogoPositiv.png" alt="CMG Massage Therapy" class="h-12">
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
                        ['href' => '#about', 'text' => 'About'],
                        ['href' => '#services', 'text' => 'Treatments'],
                        ['href' => '#contact', 'text' => 'Contact Us']
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
                    <a href="#" data-gps 
                       class="inline-flex items-center gap-2 bg-[#704B7D] text-[#F8F9FC] px-8 py-3 rounded-lg hover:bg-[#F8F9FC] hover:text-[#704B7D] border-2 border-transparent hover:border-[#704B7D] transition-all duration-300 group">
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
                     <a href="#" data-gps 
                       class="block bg-[#704B7D] text-[#F8F9FC] px-4 py-2 rounded-lg hover:bg-[#F8F9FC] hover:text-[#704B7D] border-2 border-transparent hover:border-[#704B7D] transition-all duration-300">
                        Find Us
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero" class="relative h-screen">
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full">
            <img src="./assets/image/Rectangle 10.png" alt="CMG Massage Therapy" 
                class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-[#704B7D]/20 backdrop-blur-[1.5px]"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 h-full">
            <div class="flex flex-col p-6 justify-center h-full max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight text-[#F8F9FC]">
                    CMG Massage Therapy
                </h1>
                <p class="mt-6 text-lg leading-8 text-[#F8F9FC]">
                An eco-conscious massage therapy clinic dedicated to your well-being and a healthier planet. We minimize waste, reduce paper use, and integrate sustainable practices into every aspect of your care.
                </p>

                <!-- CTA Section -->
                <div class="mt-10 flex gap-4">
                    <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank" 
                    class="inline-flex items-center gap-2 bg-[#F8F9FC] text-[#704B7D] px-8 py-3 rounded-lg hover:bg-[#704B7D] hover:text-[#F8F9FC] border-2 border-transparent hover:border-[#F8F9FC] transition-all duration-300 group">
                        <span>Book Now</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-[#F8F9FC] py-24">
        <div class="container mx-auto px-4">
            <div class="grid gap-8 lg:grid-cols-12">
                <!-- Left Column - Image (30%) -->
                <div class="lg:col-span-5">
                    <div class="relative rounded-2xl overflow-hidden shadow-lg bg-white">
                        <img src="./assets/image/5 1.png" alt="Lori McIntosh-Belanger" 
                            class="w-full h-fit object-cover">
                    </div>
                    <!-- Name Card -->
                    <div class="bg-white rounded-2xl mt-8 p-8 shadow-lg">
                        <h3 class="text-2xl font-semibold text-[#704B7D] mb-4">Lori McIntosh-Belanger</h3>
                        <p class="text-gray-600">Registered Massage Therapist</p>
                    </div>
                </div>

                <!-- Right Column - Content (70%) -->
                <div class="lg:col-span-7">
                    <div class="grid gap-8">
                        <!-- About Me Section -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg">
                            <h2 class="text-3xl font-semibold text-[#704B7D] mb-6">About Me</h2>
                            <p class="text-gray-600 mb-6">I am committed to collaborating with patients to move without pain, enhance their overall well-being and actively participate in their own recovery.</p>
            
                            
                            <!-- Mission Statement -->
                            <div class="bg-[#F8F9FC] rounded-lg p-6 mb-6">
                                <h4 class="text-xl font-semibold text-[#704B7D] mb-3">Our Mission</h4>
                                <p class="text-gray-600">Our mission is to provide evidence-informed, eco-conscious massage therapy that supports your physical well-being while upholding environmental sustainability in all aspects of care.</p>
                            </div>

                            <!-- Values Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div class="bg-[#F8F9FC] p-6 rounded-lg">
                                    <div class="flex items-center gap-4 mb-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#704B7D]/10">
                                            <svg class="h-6 w-6 text-[#704B7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <h5 class="font-semibold text-[#704B7D]">Expert Care</h5>
                                    </div>
                                    <p class="text-gray-600">Professional therapeutic techniques tailored to your needs</p>
                                </div>
                                <div class="bg-[#F8F9FC] p-6 rounded-lg">
                                    <div class="flex items-center gap-4 mb-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#704B7D]/10">
                                            <svg class="h-6 w-6 text-[#704B7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                            </svg>
                                        </div>
                                        <h5 class="font-semibold text-[#704B7D]">Eco-Friendly</h5>
                                    </div>
                                    <p class="text-gray-600">Sustainable practices and environmentally conscious choices</p>
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="text-center">
                          
                            <a href="./views/about.php"

                                class="inline-flex items-center gap-2 bg-[#704B7D] text-[#F8F9FC] px-8 py-3 rounded-lg hover:bg-[#F8F9FC] hover:text-[#704B7D] border-2 border-transparent hover:border-[#704B7D] transition-all duration-300 group">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="parallax" class="relative h-[80vh] sm:h-[50vh] bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url('./assets/image/background3.jpg');">
        <div class="absolute inset-0 bg-[#704B7D]/10 flex items-center backdrop-blur-xs justify-center">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-5xl mx-auto">
                    <!-- Enhanced Benefits Grid -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Mobility Benefit -->
                        <div class="bg-[#704B7D]/80 backdrop-blur-md rounded-lg p-6 hover:bg-white/15 transition-all">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#F8F9FC]/10">
                                    <svg class="h-6 w-6 text-[#F8F9FC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[#F8F9FC]">Improve Mobility & Flexibility</h3>
                            </div>
                            <p class="text-[#F8F9FC]/90">Reduce hypertonicity and enhance range of motion.</p>
                        </div>

                        <!-- Pain Relief Benefit -->
                        <div class="bg-[#704B7D]/80 backdrop-blur-md  rounded-lg p-6 hover:bg-white/15 transition-all">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#F8F9FC]/10">
                                    <svg class="h-6 w-6 text-[#F8F9FC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[#F8F9FC]">Relieve Joint Pain & Tension</h3>
                            </div>
                            <p class="text-[#F8F9FC]/90">Soothe discomfort and alleviate chronic pain.</p>
                        </div>

                        <!-- Eco-Friendly Benefit -->
                        <div class="bg-[#704B7D]/80 backdrop-blur-md  rounded-lg p-6 hover:bg-white/15 transition-all">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#F8F9FC]/10">
                                    <svg class="h-6 w-6 text-[#F8F9FC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[#F8F9FC]">Eco-Friendly Commitment</h3>
                            </div>
                            <p class="text-[#F8F9FC]/90">Sustainable practices and products for a greener experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="services" class="bg-[#F8F9FC] py-24">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-semibold text-[#704B7D] sm:text-5xl">Our Services</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Discover our range of therapeutic massage treatments, each tailored to your specific needs and wellness goals.
                </p>
            </div>

            <!-- Carousel Container with Navigation -->
            <div class="relative mt-10 max-w-7xl mx-auto">
                <!-- Left Arrow -->
                <button onclick="scrollCarousel('left')" 
                        class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 bg-[#F8F9FC] p-4 rounded-full shadow-lg hover:bg-[#704B7D] hover:text-[#F8F9FC] border-2 border-transparent hover:border-[#F8F9FC] transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Scrollable Cards Section -->
                <div id="carousel" class="overflow-x-auto whitespace-nowrap snap-x snap-mandatory scrollbar-hide px-4">
                    <div class="flex gap-8 pb-8">
                    <?php foreach ($data as $index => $service): ?>

                        <?php renderServiceCard($service, $index); ?>
                    <?php endforeach; ?>
                    </div>
                </div>

                <!-- Right Arrow -->
                <button onclick="scrollCarousel('right')" 
                        class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 bg-[#F8F9FC] p-4 rounded-full shadow-lg hover:bg-[#704B7D] hover:text-[#F8F9FC] border-2 border-transparent hover:border-[#F8F9FC] transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Updated scroll script -->
        <script>
            function scrollCarousel(direction) {
                const carousel = document.getElementById('carousel');
                const scrollAmount = 384; // Card width (w-80) + gap (gap-8)
                
                if (direction === 'left') {
                    carousel.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                } else {
                    carousel.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                }
            }
        </script>
    </section>
    <!-- Bootstrap JS for modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <section class="relative bg-cover bg-center bg-no-repeat py-10" style="background-image: url('./assets/image/location.png');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-[#704B7D]/35 backdrop-blur-xs"></div>
        
        <!-- Content -->
        <div class="relative z-10 container mx-auto px-4">
        
            <div class="flex flex-col lg:flex-row justify-between items-start gap-8 max-w-7xl mx-auto">
                <!-- Info Cards Column -->
                <div class="w-full lg:w-[400px] space-y-6">
                    <!-- Location Card -->
                    <div class="bg-[#704B7D]/80 backdrop-blur-md  rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#F8F9FC]/10">
                                <svg class="h-6 w-6 text-[#F8F9FC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-[#F8F9FC]">Our Location</h3>
                                <p class="text-[#F8F9FC]/80 mt-2 leading-relaxed">
                                    290 Snowdon Drive East<br>
                                    Merrickville, ON. K0G 1N0<br>
                                    Canada
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hours Card -->
                    <div class="bg-[#704B7D]/80 backdrop-blur-md  rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#F8F9FC]/10">
                                <svg class="h-6 w-6 text-[#F8F9FC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-[#F8F9FC]">Hours of Operation</h3>
                                <div class="text-[#F8F9FC]/80 mt-4 grid grid-cols-[1fr_2fr] gap-0">
                                    <div class="py-2 px-0 rounded-l-lg font-medium">Monday</div>
                                    <div class="py-2 px-3 rounded-r-lg text-right">08:00am - 03:00pm</div>
                                    
                                    <div class="py-2 px-0  rounded-l-lg font-medium">Tuesday</div>
                                    <div class="py-2 px-3 rounded-r-lg text-right">09:00am - 05:30pm</div>
                                    
                                    <div class="py-2 px-0 rounded-l-lg font-medium">Wednesday</div>
                                    <div class="py-2 px-3 rounded-r-lg text-right">11:00am - 07:00pm</div>
                                    
                                    <div class="py-2 px-0 rounded-l-lg font-medium">Thursday</div>
                                    <div class="py-2 px-3 rounded-r-lg text-right">08:00am - 12:00pm</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- GPS Button -->
                    <a href="#" data-gps 
                       class="inline-flex items-center justify-center gap-2 bg-[#F8F9FC] text-[#704B7D] px-6 py-3 rounded-lg hover:bg-[#704B7D] hover:text-[#F8F9FC] border-2 border-transparent hover:border-[#F8F9FC] transition-all duration-300 group">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Find Us</span>
                    </a>
                </div>

                <!-- Map Container -->
                <div class="w-full sm:w-[400px] ">
                    <div class="rounded-xl overflow-hidden shadow-2xl border border-white/10 h-[400px]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707.082936850555!2d-75.76057984045127!3d44.85554074154542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccd982126bb630b%3A0xf37fab8ce183918!2s290%20Snowdon%20Dr%2C%20Merrickville-Wolford%2C%20ON%20K0G%201N0!5e0!3m2!1sen!2sca!4v1733372352047!5m2!1sen!2sca"
                            class="w-full h-full rounded-xl"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php renderFooter(); ?>

    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>