<?php
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Fetch all blog posts from the database
$query = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blog Posts</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <?php include '../../includes/header.php'; ?>
    
    <div class="container">
        <h1>Manage Blog Posts</h1>
        <a href="create.php" class="btn">Create New Post</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($post['id']); ?></td>
                        <td><?php echo htmlspecialchars($post['title']); ?></td>
                        <td><?php echo htmlspecialchars($post['created_at']); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo htmlspecialchars($post['id']); ?>">Edit</a>
                            <a href="delete.php?id=<?php echo htmlspecialchars($post['id']); ?>" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php include '../../includes/footer.php'; ?>
</body>
</html>