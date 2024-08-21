@extends('layouts.adminLayout')

@section('title')
    The Purposeful Library
@endsection

@section('content')
    <section class="heading">
        <div class="welcome-text">
            <h1>The Ecclesia Library</h1>
            <p>Edit or Delete Previous Books</p>
        </div>
    </section>

    <div class="container m-t-2">
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <div class="devotionals m-t-2">
            @forelse ($books as $book)
                <div class="devotional">
                    <div class="title">
                        <h1>{{ $book->title }}</h1>
                    </div>
                    <div class="details flex">
                        <h2>{{ $book->author }}</h2>
                        <div class="options flex">
                            <a href="{{ route('editBook', ['id' => $book->id]) }}" class="btn edit"> Edit</a>
                            <form action="{{ route('deleteBook', ['id' => $book->id]) }}" method="post">
                                @csrf
                                <input type="submit" class="btn" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            @empty

            <div class="message info m-t-2">
                <p>Currently there are no Books in the Database. Add a new Book by clicking on the "Library" link on the sidebar</p>
            </div>
                
            @endforelse

            <div class="page-links flex">
                {{ $books->links('pagination.pagination') }}    
            </div>

        </div>
    </div>
@endsection