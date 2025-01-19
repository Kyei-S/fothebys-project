
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotheby’s Auction House</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <div class="logo">
                <a href="../index.php">
                <img src="../assets/images/EditedLogo.png" alt="Fotheby’s Logo" style="height: 100px; width: 200px; max-height: 70px;">
                </a>
            </div>
            <!-- Navigation Links -->
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-white" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../pages/auction.php">Auctions</a></li>
                    <?php if (isset($_SESSION['user_role'])): ?>
                        <?php if ($_SESSION['user_role'] == 'buyer' || $_SESSION['user_role'] == 'joint'): ?>
                            <li class="nav-item"><a class="nav-link text-white" href="../pages/bid_history.php">Bid History</a></li>
                        <?php endif; ?>
                        <?php if ($_SESSION['user_role'] == 'seller' || $_SESSION['user_role'] == 'joint'): ?>
                            <li class="nav-item"><a class="nav-link text-white" href="../pages/sell_item.php">Sell Item</a></li>
                        <?php endif; ?>
                        <?php if ($_SESSION['user_role'] == 'admin'): ?>
                            <li class="nav-item"><a class="nav-link text-white" href="../admin/dashboard.php">Admin Panel</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link text-white" href="../pages/logout.php">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link text-white" href="../pages/login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="../pages/register.php">Register</a></li>
                    <?php endif; ?>
                </ul>
            </nav>


        </div>

    </header>
