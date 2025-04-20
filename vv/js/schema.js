// Local Business Schema
const businessSchema = {
    "@context": "https://schema.org",
    "@type": "MassageTherapist",
    "name": "CMG Massage Therapy",
    "image": "/./assets/image/LogoPositiv.png",
    "description": "Professional massage therapy services in Merrickville, offering Swedish, Deep Tissue, and Sports massage. Eco-friendly and sustainable practices.",
    "@id": "https://cmgmassagetherapy.com",
    "url": "https://cmgmassagetherapy.com",
    "telephone": "+1-613-800-2018",
    "priceRange": "$$",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "290 Snowdon Drive East",
        "addressLocality": "Merrickville",
        "addressRegion": "ON",
        "postalCode": "K0G 1N0",
        "addressCountry": "CA"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 44.85559,
        "longitude": -75.76025
    },
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "08:00",
            "closes": "20:00"
        },
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Saturday",
            "opens": "10:00",
            "closes": "18:00"
        }
    ],
    "sameAs": [
        "https://www.facebook.com/cmgmassagetherapy"
    ]
};

// Add schema to page
document.addEventListener('DOMContentLoaded', () => {
    const script = document.createElement('script');
    script.type = 'application/ld+json';
    script.text = JSON.stringify(businessSchema);
    document.head.appendChild(script);
}); 