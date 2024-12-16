<?php
include 'includes/header.php';
include 'php/database.php';

// Get the ID from the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM packages WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/<?php echo $row['image']; ?>" class="img-fluid" alt="<?php echo $row['name']; ?>">
                </div>
                <div class="col-md-6">
                    <h1><?php echo $row['name']; ?></h1>
                    <p><?php echo $row['details']; ?></p>
                    <p><strong>Price:</strong> $<?php echo $row['price']; ?></p>
                    <a href="packages.php" class="btn btn-secondary">Back to Packages</a>
                </div>
            </div>
        </div>

        <?php
    } else {
        echo "<p>Package not found.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}

include 'includes/footer.php';
?>
