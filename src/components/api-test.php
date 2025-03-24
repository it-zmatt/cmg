<?php
require_once __DIR__ . '/../api/fetch_data.php'; // Adjust path if necessary

if (!isset($services) || empty($services)) {
    echo "<p>Error: No data available!</p>";
    exit;
}

print_r($services);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Massage Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card img {
            width: 20%;
            height: auto;
            max-height: 300px; /* Adjust image height */
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Massage Services</h2>
        <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="col-12">  <!-- Full width card -->
                    <div class="card">
                        <?php if (!empty($service['ImageUrl'])): ?>
                            <img src="<?= htmlspecialchars($service['ImageUrl']) ?>" class="card-img-top" alt="<?= htmlspecialchars($service['ServiceName']) ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($service['ServiceName']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($service['Description1']) ?></p>
                            
                            <h6>Prices:</h6>
                            <p>$<?= htmlspecialchars($service['Price1']) ?>, $<?= htmlspecialchars($service['Price2']) ?>, $<?= htmlspecialchars($service['Price3']) ?>, $<?= htmlspecialchars($service['Price4']) ?></p>

                            <h6>Effective in Addressing:</h6>
                            <ul>
                                <?php foreach ($service['Effectives'] as $benefit): ?>
                                    <li><?= htmlspecialchars($benefit) ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <p><?= htmlspecialchars($service['Description2']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


