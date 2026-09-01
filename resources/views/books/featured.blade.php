<!DOCTYPE html>
<html>
<head>
    <title>Featured Book</title>
</head>
<body>

    <h1>⭐ Featured Book</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <td>{{ $book['title'] }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book['author'] }}</td>
        </tr>
        <tr>
            <th>Year</th>
            <td>{{ $book['year'] }}</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>{{ $book['genre'] }}</td>
        </tr>
    </table>

    <br>

    <p><strong>Prepared by:</strong> John Hermie T. Tatel</p>

    <a href="{{ route('books.index') }}">⬅ Back to Books</a>

</body>
</html>