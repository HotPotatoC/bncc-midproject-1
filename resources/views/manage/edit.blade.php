<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form class="mt-5" action="{{ route('manage.store') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            id="floatingInput" placeholder="Dune" value="{{ $book->title }}">
                        <label for="floatingInput">Title</label>
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="author" class="form-control @error('author') is-invalid @enderror"
                            id="floatingInput" placeholder="Frank Herbert" value="{{ $book->author }}">
                        <label for="floatingInput">Author</label>
                        @error('author') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="pages" class="form-control @error('pages') is-invalid @enderror"
                            id="floatingInput" placeholder="0" value="{{ $book->pages }}">
                        <label for="floatingInput">Pages</label>
                        @error('pages') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="release_year"
                            class="form-control @error('release_year') is-invalid @enderror" id="floatingInput"
                            placeholder="2012" value="{{ $book->release_year }}">
                        <label for="floatingInput">Release Year</label>
                        @error('release_year') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="d-grid col-3">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
