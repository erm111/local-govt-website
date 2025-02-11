<?php
require_once '../includes/config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Fetch blog posts from the database
$posts = getAllBlogPosts(); // Assume this function is defined in functions.php

include '../includes/header.php';
?>

<div class="container">
    <h1>Blog</h1>
    <div class="blog-posts">
        <?php if ($posts): ?>
            <?php foreach ($posts as $post): ?>
                <div class="blog-post">
                    <h2><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h2>
                    <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    <a href="post.php?id=<?php echo $post['id']; ?>">Read more</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No blog posts available.</p>
        <?php endif; ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>