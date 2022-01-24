<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <h1>{{ $book->title }} ({{ $book->release_year }})</h1>
                <h2>— {{ $book->author }}</h2>
            </div>
        </div>
    </div>
</x-layout>
