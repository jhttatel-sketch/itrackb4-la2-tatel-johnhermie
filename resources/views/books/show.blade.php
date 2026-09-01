<!DOCTYPE html>
<html>
<head>
    <title>{{ $book['title'] }}</title>
</head>
<body>

    <h1>Book Details</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <td>{{ $book['id'] }}</td>
        </tr>
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