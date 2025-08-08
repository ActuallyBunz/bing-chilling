<?php
// Start the session (if needed for user authentication, etc.)
session_start();

// You can include other PHP files here if needed, such as database connection, utilities, etc.
// require_once 'includes/db_connect.php';
// require_once 'includes/functions.php';

// If a user is logged in, you could show a custom greeting:
$user_logged_in = isset($_SESSION['user_id']); // Example check for logged-in user
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>balkdielind</title>
    <!-- You can link your CSS files here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Welcome to My PHP Website</h1>
            <p>This is the homepage of a basic PHP-powered website.</p>

            <?php if ($user_logged_in): ?>
                <p>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <?php else: ?>
                <p>If you don't have an account, you can <a href="register.php">register</a>, or <a href="login.php">log in</a>.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Latest News</h2>
            <ul>
                <li><a href="#">News item 1</a></li>
                <li><a href="#">News item 2</a></li>
                <li><a href="#">News item 3</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website. All rights reserved.</p>
    </footer>
</body>
</html>
