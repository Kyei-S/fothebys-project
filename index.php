<?php
include 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotheby’s Auction House</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/images/Fothebylogo2.jpg" alt="Fotheby’s Logo" style="width: 150px;">
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="pages/auction.php">Auctions</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="pages/user_profile.php">My Account</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container py-5">
        <h1>Welcome to Fotheby’s Auction House</h1>
        <p>Discover fine art and exclusive auction items.</p>
    </div>

    <div class="container py-5">
    <h2 class="text-center mb-4">Available Auction Items</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/abstract_painting.png" class="card-img-top" alt="Abstract Painting">
                <div class="card-body">
                    <h5 class="card-title">Abstract Painting</h5>
                    <p class="card-text">A vibrant abstract painting.</p>
                    <p class="card-text"><strong>Starting Price: £3,000</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/golden_vase.png" class="card-img-top" alt="Golden Vase">
                <div class="card-body">
                    <h5 class="card-title">Golden Vase</h5>
                    <p class="card-text">A rare golden vase from the 19th century.</p>
                    <p class="card-text"><strong>Starting Price: £5,000</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
