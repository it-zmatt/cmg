<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMG Massage Therapy</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>



    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#704B7D',
                        'primary-light': '#8D5E9D',
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CPW742VFLZ"></script>
    
    <!-- Custom JavaScript -->
    <script src="/assets/js/script.js" defer></script>
</head>


<body>
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

    <main>
        <section id="hero" class="relative h-screen">
            <!-- Background Image -->
            <div class="absolute inset-0 w-full h-full">
                <img src="/public/assets/image/Rectangle 10.png" alt="CMG Massage Therapy" 
                    class="w-full h-full object-cover">
                <!-- Overlay -->
                <div class="absolute inset-0 bg-[#704B7D]/20 backdrop-blur-[1.5px]"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 h-full">
                <div class="flex flex-col p-6 justify-center h-full max-w-2xl">
                    <span class="text-lg font-medium text-[#F8F9FC] mb-3">Sustainable Healing, Gentle Care</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight text-[#F8F9FC]">
                        CMG Massage Therapy
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-[#F8F9FC]">
                        Eco-friendly massage therapy for comfort, well-being, and a greener future. We minimize waste, reduce paper use, and embrace sustainability to care for you and the planet.
                    </p>

                    <!-- CTA Section -->
                    <div class="mt-10 flex gap-4">
                        <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank" 
                        class="inline-block bg-[#F8F9FC] text-[#704B7D] px-8 py-3 rounded-lg hover:opacity-90 transition-all">
                            Book Now
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
                            <img src="/public/assets/image/5 1.png" alt="Lori McIntosh-Belanger" 
                                class="w-full h-full object-cover">
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
                                    <p class="text-gray-600">Dedicated to providing eco-conscious massage therapy that prioritizes both your wellness and environmental sustainability.</p>
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
                                <a >
                                    <button class="learn"></button>
                                </a>
                                    <a href="../src/views/about.php" 
                                    class="inline-block bg-[#704B7D] text-white px-8 py-3 rounded-lg hover:opacity-90 transition-all">
                                    Learn more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="parallax2" class="relative h-[50vh] bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url('/public/assets/image/background3.jpg');">
        <div class="absolute inset-0 bg-[#704B7D]/10 flex items-center backdrop-blur-sm justify-center">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-5xl mx-auto">
                    <!-- Enhanced Benefits Grid -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Mobility Benefit -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 hover:bg-white/15 transition-all">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#F8F9FC]/10">
                                    <svg class="h-6 w-6 text-[#F8F9FC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[#F8F9FC]">Improve Mobility & Flexibility</h3>
                            </div>
                            <p class="text-[#F8F9FC]/90">Reduce stiffness and enhance range of motion.</p>
                        </div>

                        <!-- Pain Relief Benefit -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 hover:bg-white/15 transition-all">
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
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 hover:bg-white/15 transition-all">
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


        <section id="treatments">
            <div id="treatments-grid">
                <a href="../src/components/DeepTissueMassage.php">
                    <div id="treatment-card">
                        <img src="/public/assets/image/Swedish Massage.png" alt="Swedish Massage">
                        <h3>Swedish Massage</h3>
                        <a href="#">Learn more</a>
                    </div>
                </a>
                <!-- Repeat for other treatment cards -->
            </div>
        </section>

        
        

        <section id="direction">
            <div id="location-content">
                <div id="location-info">
                    <h2>Location</h2>
                    <p>
                        290 Snowdon Drive East <br>
                        Merrickville, ON. K0G 1N0 <br>
                        Canada
                    </p>
                    <h2>Contact Us</h2>
                    <p>
                        <a href="tel:+16138002018">Phone: (613) 800-2018</a>
                    </p>
                </div>
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707.082936850555!2d-75.76057984045127!3d44.85554074154542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccd982126bb630b%3A0xf37fab8ce183918!2s290%20Snowdon%20Dr%2C%20Merrickville-Wolford%2C%20ON%20K0G%201N0!5e0!3m2!1sen!2sca!4v1733372352047!5m2!1sen!2sca"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div id="footer-content">
            <div id="footer-cta">
                <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank">Book Your Massage Now</a>
            </div>
            <div id="footer-links">
                <h3>Our Services</h3>
                <ul>
                    <li><a href="/src/Swedish Massage.php">Swedish Massage</a></li>
                    <li><a href="/src/Deep Tissue Massage.php">Deep Tissue Massage</a></li>
                    <li><a href="/src/Sports Massage.php">Sport Massage</a></li>
                </ul>
            </div>
            <div id="footer-logo">
                <img src="/public/assets/image/LogoPositiv.png" alt="CMG Logo">
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS for modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>