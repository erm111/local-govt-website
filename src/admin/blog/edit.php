<?php
// Include database connection and functions
include_once '../../includes/db.php';
include_once '../../includes/functions.php';

// Check if the post ID is set
if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    // Fetch the post data from the database
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = :id");
    $stmt->execute(['id' => $postId]);
    $post = $stmt->fetch();

    // Check if the post exists
    if (!$post) {
        die('Post not found.');
    }
} else {
    die('Invalid request.');
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Update the post in the database
    $stmt = $pdo->prepare("UPDATE blog_posts SET title = :title, content = :content WHERE id = :id");
    $stmt->execute(['title' => $title, 'content' => $content, 'id' => $postId]);

    // Redirect to the manage page after updating
    header('Location: manage.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <h1>Edit Blog Post</h1>
    <form action="" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" required><?php echo htmlspecialchars($post['content']); ?></textarea>

        <button type="submit">Update Post</button>
    </form>
    <a href="manage.php">Back to Manage Posts</a>
</body>
</html>