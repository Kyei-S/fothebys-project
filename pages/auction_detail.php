<?php
include '../includes/db.php';

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the ID is an integer

    // Fetch the auction item details
    $sql = "SELECT * FROM Auction_Items WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if an item is found
    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
    } else {
        echo "<h1>Item not found.</h1>";
        exit;
    }
} else {
    echo "<h1>No item ID provided.</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $item['title']; ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1>Fotheby’s Auction Details</h1>
        </div>
    </header>

    <!-- Auction Item Details Section -->
    <div class="container py-5">
        <div class="row">
            <!-- Item Image -->
            <div class="col-md-6">
                <img src="../assets/images/<?php echo $item['image_url']; ?>" alt="<?php echo $item['title']; ?>" class="img-fluid rounded">
            </div>
            
            <!-- Item Details -->
            <div class="col-md-6">
                <h2><?php echo $item['title']; ?></h2>
                <p><?php echo $item['description']; ?></p>
                <p><strong>Starting Price:</strong> £<?php echo $item['starting_price']; ?></p>
                <p><strong>Category:</strong> <?php echo $item['category']; ?></p>
                
                <!-- Bidding Button (Optional) -->
                <a href="#" class="btn btn-primary">Place a Bid</a>
            </div>
        </div>
    </div>
</body>
</html>
