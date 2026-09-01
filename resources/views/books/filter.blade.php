<!DOCTYPE html>
<html>
<head>
    <title>Filtered Books</title>
</head>
<body>

    @if ($genre === null)
        <h1>All Books</h1>
        <p>Showing {{ count($books) }} books.</p>
    @else
        <h1>{{ $genre }} Books</h1>
        <p>Showing {{ count($books) }} book(s).</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
        </tr>

        @foreach ($books as $book)
        <tr>
            <td>{{ $book['id'] }}</td>
            <td>
                <a href="{{ route('books.show', $book['id']) }}">
                    {{ $book['title'] }}
                </a>
            </td>
            <td>{{ $book['author'] }}</td>
            <td>{{ $book['year'] }}</td>
            <td>{{ $book['genre'] }}</td>
        </tr>
        @endforeach

    </table>

    <br>

    <p><strong>Prepared by:</strong> John Hermie T. Tatel</p>

    <a href="{{ route('books.index') }}">⬅ Back to Books</a>

</body>
</html>