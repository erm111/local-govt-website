<?php
// Include the database connection and functions
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Initialize variables
$title = '';
$content = '';
$error = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = sanitize_input($_POST['title']);
    $content = sanitize_input($_POST['content']);

    // Validate input
    if (empty($title) || empty($content)) {
        $error = 'Title and content are required.';
    } else {
        // Prepare and execute the insert statement
        $stmt = $pdo->prepare("INSERT INTO blog_posts (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);

        if ($stmt->execute()) {
            header('Location: manage.php'); // Redirect to manage page after successful creation
            exit;
        } else {
            $error = 'Failed to create blog post. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Create Blog Post</h1>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="create.php" method="POST">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required><?php echo htmlspecialchars($content); ?></textarea>
            <button type="submit">Create Post</button>
        </form>
    </div>
</body>
</html>