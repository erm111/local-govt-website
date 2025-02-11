<?php
// Fetch the blog post data from the database using the post ID
require_once '../includes/db.php';
require_once '../includes/functions.php';

$post_id = $_GET['id'] ?? null;

if ($post_id) {
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = :id");
    $stmt->execute(['id' => $post_id]);
    $post = $stmt->fetch();

    if (!$post) {
        echo "<h1>Post not found</h1>";
        exit;
    }
} else {
    echo "<h1>Invalid post ID</h1>";
    exit;
}

// Include header
include '../includes/header.php';
?>

<article>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <p>Published on: <?php echo htmlspecialchars($post['created_at']); ?></p>
    <div>
        <?php echo htmlspecialchars($post['content']); ?>
    </div>
</article>

<?php
// Include footer
include '../includes/footer.php';
?>