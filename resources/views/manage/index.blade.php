<x-layout>
    <div class="container">
        <div class="row">
            <div class="d-flex my-4">
                <a href="{{ route('manage.create') }}" class="btn btn-primary">+ Add new book</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">*</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Pages</th>
                            <th scope="col">Release Year</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->pages }}</td>
                            <td>{{ $book->release_year }}</td>
                            <td>
                                <a href="{{ route('manage.edit', ['id' => $book->id]) }}" class="btn btn-primary">
                                    Edit
                                </a>
                                <form action="{{ route('manage.destroy', ['id' => $book->id]) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
