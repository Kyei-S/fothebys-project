<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../includes/db.php';
include '../includes/header.php'; // Include the shared header

// Check if the item_id is set in the URL
if (isset($_GET['id'])) {
    $item_id = intval($_GET['id']); // Ensure the item_id is an integer

    // Fetch the auction item details
    $sql = "SELECT * FROM Auction_Items WHERE item_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $item_id); // Bind the item_id to prevent SQL injection
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

    <!-- Auction Item Details Section -->
    <div class="container py-5">
    <h3 class="text-center">Auction Item Overview</h3>
        <div class="row">
            <!-- Item Image -->
            <div class="col-md-6">
                <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="img-fluid rounded">
            </div>
            
            <!-- Item Details -->
            <div class="col-md-6">
                <h2><?php echo htmlspecialchars($item['title']); ?></h2>
                <p><?php echo htmlspecialchars($item['description']); ?></p>
                <p><strong>Starting Price:</strong> £<?php echo htmlspecialchars($item['starting_price']); ?></p>
                <p><strong>Category:</strong> <?php echo htmlspecialchars($item['category']); ?></p>
                
                <!-- Bidding Button -->
                <a href="#" class="btn btn-primary">Place a Bid</a>
            </div>
        </div>
    </div>
</body>
</html>
