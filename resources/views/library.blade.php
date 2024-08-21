@extends('layouts.baseLayout')

@section('title')
The Purposeful Library
@endsection

@section('content')
    <div class="media">
        <h1>The Ecclesia Library</h1>
        <div class="library-container">
            
            @forelse ($books as $book)
                <div class="library-content flex">
                    <div class="library-image">
                        <img src="{{ asset('libraryImages/'.$book->image) }}" alt="">
                    </div>
                    <div class="library-description flex">
                        <h3>{{ $book->title }}</h3>
                        <div class="sub-section">
                            <p><strong>Author :</strong> {{ $book->author }}</p>
                            <a href="{{ route('libraryView', ['id' => $book->id]) }}" class="msg-btn block">View Book</a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="status-info">
                    <p>Stay tuned. Our books will be available here.</p>
                </div>                
            @endforelse 

        </div>
        
    </div>
@endsection





