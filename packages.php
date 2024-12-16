<?php include 'includes/header.php'; ?>
<?php include 'php/database.php'; ?>

<main class="container my-5">
    <h1 class="text-center mb-4">Travel Packages</h1>
    <div class="row">
        <?php
        $query = "SELECT * FROM packages";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/images/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['title'] . '</h5>
                            <p class="card-text">' . $row['description'] . '</p>
                            <p class="text-primary fw-bold">৳' . $row['price'] . '</p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '<p class="text-center">No packages available at the moment.</p>';
        }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>


<?php
include 'includes/header.php';
include 'php/database.php';

// Fetch travel packages from the database
$query = "SELECT * FROM packages";
$result = mysqli_query($conn, $query);

echo '<div class="container mt-5">';
echo '<h1 class="text-center mb-4">Travel Packages</h1>';
echo '<div class="row">';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '">
                <div class="card-body">
                    <h5 class="card-title">' . $row['name'] . '</h5>
                    <p class="card-text">' . substr($row['description'], 0, 100) . '...</p>
                    <a href="details.php?id=' . $row['id'] . '" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>';
    }
} else {
    echo "<p class='text-center'>No packages available.</p>";
}

echo '</div>';
echo '</div>';

include 'includes/footer.php';
?>
