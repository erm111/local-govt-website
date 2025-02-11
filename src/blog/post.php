<?php
require_once '../includes/db.php';
require_once '../includes/functions.php';

if (isset($_GET['id'])) {
    $postId = intval($_GET['id']);
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->execute(['id' => $postId]);
    $post = $stmt->fetch();

    if (!$post) {
        echo "Post not found.";
        exit;
    }
} else {
    echo "No post ID provided.";
    exit;
}

include '../includes/header.php';
?>

<div class="blog-post">
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
    <p><em>Published on: <?php echo htmlspecialchars($post['created_at']); ?></em></p>
</div>

<?php
include '../includes/footer.php';
?>