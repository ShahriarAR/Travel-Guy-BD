<?php include 'includes/header.php'; ?>
<?php include 'php/database.php'; ?>

<main class="container my-5">
    <h1 class="text-center mb-4">Contact Us</h1>
    <form action="php/contact_process.php" method="POST" class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea name="message" class="form-control" id="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
