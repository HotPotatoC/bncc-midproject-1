<x-layout>
    <div class="container">
        <div class="row mt-5">
            @foreach ($books as $book)
            <div class="col-12 col-md-4 my-3">
                <div class="card shadow border-0">
                    <div class="card-img-top bg-secondary h-100 pt-5"></div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $book->title }} ({{ $book->release_year }})</h4>
                        <p class="card-subtitle text-muted">{{ $book->author }} — {{ $book->pages }}</p>
                        <a href="{{ route('show', ['id' => $book->id]) }}" class="mt-3 btn btn-primary">
                            See Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
