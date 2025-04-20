<?php
require '../components/Navbar.php';
require '../components/Footer.php';
require '../components/Header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php renderHeader(
        'About Me - CMG Massage Therapy',
        'Learn more about CMG Massage Therapy\'s approach to wellness and sustainable healing in Merrickville.'
    ); ?>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body class="bg-[#F8F9FC]">
    <?php renderNavbar(); ?>

    <main class="container mx-auto px-4 pt-24 pb-16">
        <!-- Back to Home Button -->
     

        <div class="grid gap-8 lg:grid-cols-12">
            <!-- Left Column - Image (5 columns) -->
            <div class="lg:col-span-5">
                <div class="relative rounded-2xl overflow-hidden shadow-md bg-white">
                <a href="/../index.php#about" 
                    class="absolute top-4 left-4 text-[#F8F9FC] bg-[#704B7D] hover:text-[#704B7D] hover:bg-[#F8F9FC] flex items-center space-x-2 px-4 py-2  rounded-lg shadow-lg hover:bg-white hover:text-red transition-all group">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span class="font-medium">Back</span>
                    </a>
                    <img src="/../assets/image/aboutme.png" alt="About CMG Massage Therapy" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Credentials Card -->
                <div class="bg-white rounded-2xl mt-8 p-8 shadow-lg">
                    <h3 class="text-xl font-semibold text-[#704B7D] mb-6 flex items-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                        Professional Credentials
                    </h3>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="bg-[#F8F9FC] p-4 rounded-lg hover:shadow-md transition-all">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-[#704B7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="font-medium">Registered Massage Therapist</span>
                            </div>
                        </div>
                        <div class="bg-[#F8F9FC] p-4 rounded-lg hover:shadow-md transition-all">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-[#704B7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="font-medium">Honors Graduate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Content (7 columns) -->
            <div class="lg:col-span-7">
                <div class="grid gap-8">
                    <!-- Title and Introduction -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h1 class="text-3xl font-semibold text-[#704B7D] mb-6">About Me</h1>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            I am a proud honors graduate and a newly Registered Massage Therapist with a passion for helping people improve their activities of daily living. My focus is on enhancing mobility, relieving discomfort, and empowering individuals to live life to the fullest. Throughout my career, I have been dedicated to sharing knowledge, fostering understanding, and equipping others with the tools they need to support their well-being.                        </p>
                        <p class="text-gray-600 mb-6  leading-relaxed">
                            I am committed to providing personalized care, tailoring each treatment to meet my clients' unique needs and health goals. Massage therapy, in my view, is a powerful way to promote overall wellness, ease pain, and improve quality of life.                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Outside of treating clients, I find joy in traveling and creating lasting memories with my family. Staying active is a vital part of my lifestyle—I love the peace of a brisk walk, the mindfulness of yoga, and the energy of cycling.
                            Living in the picturesque community of Merrickville is something I truly cherish. Its welcoming charm, vibrant local culture, and beautiful surroundings inspire me daily and make it the perfect place to call home.
                        </p>
                    </div>

                    <!-- Book Now Section -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <p class="text-gray-600 mb-6">Ready to experience a personalized massage therapy treatment tailored to your needs?</p>
                        <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank" 
                           class="inline-block bg-[#704B7D] text-white px-8 py-3 rounded-lg hover:opacity-90 transition-all">
                            Book Your Massage Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php renderFooter(); ?>
</body>
</html>