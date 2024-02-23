<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <!-- Link the CSS file using the asset() helper function -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Articles</h1>
        <ul>
            @foreach ($articles as $article)
                <li>
                    <h2>{{ $article['title'] }}</h2>
                    <p>{{ $article['description'] }}</p>
                    <p>Author: {{ $article['author'] }}</p>
                    <img src="{{ asset('images/news.jpeg') }}" alt="{{ $article['title'] }}">
                    <form method="POST" action="/articles/{{ $article['id'] }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <h2>Add New Article</h2>
        <form method="POST" action="/articles" enctype="multipart/form-data">
            @csrf
            <label>Title</label><br>
            <input type="text" name="title"><br>
            <label>Description</label><br>
            <textarea name="description"></textarea><br>
            <label>Author</label><br>
            <input type="text" name="author"><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
