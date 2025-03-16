<?php
function renderCard($title, $image, $link, $description = '') {
    return "
    <div class='transform transition-all hover:scale-105 duration-300'>
        <a href='{$link}' class='block'>
            <div class='bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl'>
                <div class='relative'>
                    <img src='{$image}' alt='{$title}' class='w-full h-48 object-cover'>
                    <div class='absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black/50 to-transparent'>
                        <h3 class='text-white text-xl font-semibold'>{$title}</h3>
                    </div>
                </div>
                " . ($description ? "
                <div class='p-4'>
                    <p class='text-gray-600'>{$description}</p>
                </div>
                " : "") . "
                <div class='px-4 py-3 bg-gray-50'>
                    <button class='w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors duration-200'>
                        Learn More
                    </button>
                </div>
            </div>
        </a>
    </div>
    ";
}
?> 