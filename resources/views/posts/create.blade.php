<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
<h1>Create New Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Content" required></textarea>
    <button type="submit">Create</button>
</form>
<a href="{{ route('posts.index') }}">Back</a>
</body>
</html>
