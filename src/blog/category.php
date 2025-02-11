<?php
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Fetch categories from the database
$query = "SELECT * FROM categories";
$stmt = $pdo->prepare($query);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch blog posts by category if a category is selected
$category_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$posts = [];

if ($category_id) {
    $query = "SELECT * FROM posts WHERE category_id = :category_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

include '../includes/header.php';
?>

<h1>Blog Categories</h1>
<ul>
    <?php foreach ($categories as $category): ?>
        <li><a href="category.php?id=<?= $category['id']; ?>"><?= htmlspecialchars($category['name']); ?></a></li>
    <?php endforeach; ?>
</ul>

<h2>Posts in this Category</h2>
<?php if ($posts): ?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><a href="post.php?id=<?= $post['id']; ?>"><?= htmlspecialchars($post['title']); ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No posts found in this category.</p>
<?php endif; ?>

<?php include '../includes/footer.php'; ?>