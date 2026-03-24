<h1>New book</h1>

<form action="/books" method="post">
    @csrf
    <input type="text" placeholder="title goes here" name = "title" id = "title">
    <input type="text" placeholder="author goes here" name = "author" id = "author">
    <input type="date" placeholder="date goes here" name = "released_at" id = "released_at">
    <input type="submit" value="Create">
</form>