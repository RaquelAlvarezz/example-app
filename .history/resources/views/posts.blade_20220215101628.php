<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/app.css">
    <script src="../js/app.js"></script>
    <title>My Blog</title>
</head>
<body>
    <?php foreach ($posts as $post) : ?>
   <article>
<?= $post; ?>

   </article>
<?php endforeach; ?>
</body>
</html>
