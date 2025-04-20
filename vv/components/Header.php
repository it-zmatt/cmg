<?php
function renderHeader($title, $description) {
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="massage therapy Merrickville, massage therapist Merrickville, RMT Merrickville, deep tissue massage, Swedish massage, sports massage, Merrickville massage, massage near me, registered massage therapist Ontario">
    <meta name="geo.region" content="CA-ON">
    <meta name="geo.placename" content="Merrickville">
    <meta name="geo.position" content="44.85559;-75.76025">
    <meta name="ICBM" content="44.85559, -75.76025">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description) ?>">
    <meta property="og:image" content="/assets/image/LogoPositiv.png">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_CA">
    
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/styles.css">
    
    <!-- Preload important assets -->
    <link rel="preload" href="/assets/image/LogoPositiv.png" as="image">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://cmgmassagetherapy.com<?= $_SERVER['REQUEST_URI'] ?>">
    <?php
}
?> 