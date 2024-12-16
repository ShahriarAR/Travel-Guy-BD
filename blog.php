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
