<?php include 'includes/header.php'; ?>
<?php include 'php/database.php'; ?>

<main>
    <!-- Hero Section -->
    <?php
    // Fetch a dynamic background image from the database
    $query = "SELECT image FROM hero_backgrounds WHERE active = 1 ORDER BY RAND() LIMIT 1";  // Random image from packages
    $result = mysqli_query($conn, $query);
    $backgroundImage = "assets/images/default-bg.jpg"; // Fallback image

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $backgroundImage = "assets/images/" . $row['image'];
    }
    ?>

    <div class="hero-section" style="background-image: url('<?php echo $backgroundImage; ?>');">
        <div class="overlay">
            <div class="container text-center text-white">
                <h1 id="hero-title" class="animate-text">Welcome to Travel Guy BD</h1>
                <p class="animate-text">Your gateway to incredible adventures!</p>
                <a href="packages.php" class="btn btn-light btn-lg">
                    <i class="fas fa-plane"></i> Explore Packages
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Packages -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Featured Packages</h2>
        <div class="row">
            <?php
            include 'php/database.php';
            $query = "SELECT * FROM packages LIMIT 3";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['title'] . '</h5>
                            <p class="card-text">' . $row['description'] . '</p>
                            <p class="text-primary fw-bold">৳' . $row['price'] . '</p>
                            <a href="packages.php?id=' . $row['id'] . '" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

