<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/app.css">
    <script src="../js/app.js"></script>
    <title>My Blog</title>
</head>
<body>
    <article>
        <h1>{{ $post->title }}</h1>
        <div>
        {!! $post->body !!}
        </div>
    </article>
<a href="/">Go Back</a>

</body>
</html>
