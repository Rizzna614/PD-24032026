<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($allTheBooks as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
                <form action = "/books/{{ $book->id }}/delete" method = "post">
                @csrf 
                @method('DELETE')
                <input type = "submit" value = "Delete">
                </form>
            </div>
        </li>
    @endforeach
    <br> <a href = "/">About</a>
</ul>