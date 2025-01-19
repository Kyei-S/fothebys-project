<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../includes/db.php';
include '../includes/header.php'; // Include the shared header

// Fetch auction items
$sql = "SELECT * FROM Auction_Items";
$result = $conn->query($sql);
?>


    <!-- Auction Items Section -->
    <div class="container py-5">
    <h3 class="text-center"> Auction Items</h3>
    <h4 class="text-center text-secondary"> Bid on Exceptional Works of Art and Collectibles</h4>
        <div class="row">
            <?php 
            // Check if there are auction items
            if ($result && $result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
                    // Check if the 'item_id' field exists and has a value
                    if (!empty($row['item_id'])): ?>
                        <div class="col-md-4 mb-4">
                            <!-- Clickable Card -->
                            <a href="auction_detail.php?id=<?php echo htmlspecialchars($row['item_id']); ?>" class="text-decoration-none">
                                <div class="card">
                                    <!-- Auction Item Image -->
                                    <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['title']); ?>" style="height: 200px; object-fit: cover;">
                                    
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                                        <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                                        <p class="card-text"><strong>Starting Price: £<?php echo htmlspecialchars($row['starting_price']); ?></strong></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    endif; // End 'item_id' check
                endwhile; 
            else: ?>
                <p>No auction items available at the moment.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
