<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/app.css">
    <script src="../js/app.js"></script>
    <title>My Blog</title>
</head>
<body>
    @foreach ($posts as $post)

   <article class="{{$loop->even ? 'foobar' : '' }}">
<h1>
    <a href="/posts/{{ $post->slug }}">

{{ $post ->title }}
</a>

</h1>
<div>
    {{ $post->excerpt }}
</div>

   </article>
@endforeach
</body>
</html>
