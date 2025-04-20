// Device Detection
function getDeviceType() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/iPhone|iPad|iPod/.test(userAgent)) return 'ios';
    if (/android/i.test(userAgent)) return 'android';
    return 'desktop';
}

// GPS Link Updates
async function updateGPSLinks() {
    const destination = {
        lat: 44.85559,
        lng: -75.76025,
        address: '290+Snowdon+Dr,+Merrickville+ON+K0G+1N0+Canada'
    };

    // Initialize all GPS buttons
    const gpsButtons = document.querySelectorAll('[data-gps]');
    gpsButtons.forEach(button => {
        button.addEventListener('click', async (e) => {
            e.preventDefault();
            
            try {
                // Show loading state
                button.classList.add('opacity-50', 'cursor-wait');
                
                const deviceType = getDeviceType();
                let mapUrl;

                if (deviceType === 'ios') {
                    // For iOS: Use Apple Maps with destination address
                    mapUrl = `http://maps.apple.com/?daddr=${destination.address}`;
                } else {
                    // For Android/Desktop: Use Google Maps with destination address
                    mapUrl = `https://www.google.com/maps/dir/Current+Location/${destination.address}`;
                }
                
                // Open map in new tab
                window.open(mapUrl, '_blank');
            } catch (error) {
                console.error('Navigation error:', error);
                // Fallback to simple location marker if everything fails
                const fallbackUrl = `https://www.google.com/maps?q=${destination.lat},${destination.lng}`;
                window.open(fallbackUrl, '_blank');
            } finally {
                // Remove loading state
                button.classList.remove('opacity-50', 'cursor-wait');
            }
        });
    });
}

// Helper function to get current position
function getCurrentPosition() {
    return new Promise((resolve, reject) => {
        if (!navigator.geolocation) {
            reject(new Error('Geolocation is not supported'));
            return;
        }

        navigator.geolocation.getCurrentPosition(resolve, reject, {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        });
    });
}

// Initialize GPS functionality
document.addEventListener('DOMContentLoaded', updateGPSLinks);

// Mobile Menu Toggle
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
}

// Scroll Behavior
function handleScroll() {
    const header = document.querySelector('header');
    if (window.scrollY > 0) {
        header.classList.add('shadow-lg');
    } else {
        header.classList.remove('shadow-lg');
    }
}

// Carousel Navigation
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

// Accordion Toggle
function toggleAccordion(element) {
    const content = element.nextElementSibling;
    const icon = element.querySelector('.accordion-icon');
    
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

// Helper functions for loading states
function showLoading(button) {
    const loadingIndicator = button.querySelector('.loading-indicator');
    if (loadingIndicator) {
        loadingIndicator.classList.remove('hidden');
    }
}

function hideLoading(button) {
    const loadingIndicator = button.querySelector('.loading-indicator');
    if (loadingIndicator) {
        loadingIndicator.classList.add('hidden');
    }
}

// Event Listeners
window.addEventListener('load', () => {
    updateGPSLinks();
});

window.addEventListener('scroll', handleScroll);
