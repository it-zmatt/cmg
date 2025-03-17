<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMG Massage Therapy</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome for social media icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="/public/css/style.css"> -->
    <!-- Google tag (gtag.js) --> 
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

      if (/iPhone|iPad|iPod/.test(userAgent)) {
        return 'ios';
      }
      if (/android/i.test(userAgent)) {
        return 'android';
      }
      return 'desktop';
    }

    function updateLink() {
      const deviceType = getDeviceType();

      let link = '';
      if (deviceType === 'ios') {
        link = `http://maps.apple.com/?daddr=290+Snowdon+Dr%2C+290+Snowdon+Dr+Merrickville+ON+K0G+1N0+Canada`;
      } else if (deviceType === 'android') {
        link = `https://www.google.com/maps/dir/?api=1&destination=290+Snowdon+Dr%2C+290+Snowdon+Dr+Merrickville+ON+K0G+1N0+Canada`;
      } else {
        link = `https://www.google.com/maps/dir/?api=1&destination=290+Snowdon+Dr%2C+290+Snowdon+Dr+Merrickville+ON+K0G+1N0+Canada`;
      }

      document.querySelector('[data-gps]').href = link;
    }

    window.onload = updateLink;
    </script>
</head>

<body>
    <header>
        <nav>
            <div>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div>
                    <ul>
                        <li><a href="../../public/index.php#about">About</a></li>
                        <li><a href="../../public/index.php#treatments">Treatments</a></li>
                        <li><a href="../../public/index.php#direction">Contact Us</a></li>
                    </ul>
                    <div>
                        <a href="https://www.google.com/maps?q=44.85559,-75.76025" target="_blank" data-gps>
                            Open GPS
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <section>
        <div>
            <a href="../../public/index.php#about"> 
                <button> 
                    <span></span>
                </button>
            </a>
            <img src="/public/assets/image/fulldeep.png" alt="Deep Tissue Massage">
            <br>
            <div>
                <h2>Deep Tissue Massage</h2>
                <p>Deep tissue massage is a focused treatment aimed at releasing chronic tension and addressing deeper layers of muscle and connective tissue. This technique is especially beneficial for individuals dealing with persistent pain, postural issues, or areas of long-standing muscle tightness. </p>
                <div> 
                    <p>
                        30 minutes - $70.00
                        <br>
                        45 minutes - $90.00
                        <br>
                        60 minutes - $110.00
                        <br>
                        90 minutes - $150.00
                    </p>
                </div>
            </div>
        </div>
        <div>
            <h1>Effective in Addressing</h1>
            <ul>
                <li>Chronic pain: Provides relief for conditions such as lower back pain, neck tension, or sciatica. </li>
                <li>Postural imbalances: Corrects muscular imbalances caused by poor posture or repetitive strain.  </li>
                <li>Injuries: Aids in the recovery of strains, sprains, or overuse injuries.</li>
                <li>Scar tissue: Breaks down adhesions and improves tissue elasticity. </li>
                <li>Limited mobility: Restores range of motion by releasing restrictions in deep muscle layers. </li>
                <li>Stress and tension: Eases mental and physical stress through targeted pressure.</li>
            </ul>
            <br>
            <p>Deep tissue massage is ideal for those seeking targeted relief from persistent issues or looking to restore balance and function to the body. With its precise, intentional approach, this therapy can provide lasting improvements in both physical comfort and overall well-being</p>
            <span></span>
            <a href="https://lorimcintosh-belanger.clinicsense.com/book" target="_blank">Book Your Massage Now</a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
