<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Category</th>
        <th>Price</th>
    </tr>
    @foreach ($book as $books)
        <tr>
            <td>{{ $books->id }}</td>
            <td>{{ $books->title }}</td>
            <td>{{ $books->description }}</td>
            <td>{{ $books->author }}</td>
            <td>{{ $books->publisher }}</td>
            <td>{{ $books->category }}</td>
            <td>RM{{ $books->price }}</td>
            <!-- <td><a href={{ 'deleteUser/' . $books['id'] }}>Delete</a></td>
    <td><a href={{ 'updateUser/' . $books['id'] }}>Update</a></td> -->
        </tr>
    @endforeach
</table>

<style>
    .w-5 {
        display: none
    }
</style>

<span>
    {{ $book->links() }}
</span>
