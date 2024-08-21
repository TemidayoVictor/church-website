@extends('layouts.adminLayout')

@section('title')
    All Events
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Events Collection</h1>
            <p>Edit or Delete Previous Events</p>
        </div>
    </section>

    <div class="container m-t-2">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <div class="devotionals m-t-2">
            
            @forelse ($events as $event)
                <div class="devotional">
                    <div class="title">
                        <h1>{{ $event->title }}</h1>
                    </div>
                    <div class="details flex">
                        <h2>{{ $event->minister }}</h2>
                        <div class="options flex">
                            <a href="{{ route('addEventImages', ['id' => $event->id]) }}" class="btn add"> <i class="fas fa-plus"></i> Add Image</a>
                            <a href="{{ route('editEvent', ['id'=> $event->id]) }}" class="btn edit"> Edit</a>
                            <form action="{{ route('deleteEvent', ['id' => $event->id]) }}" method="post">
                                @csrf
                                <input type="submit" class="btn" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            @empty
            
            <div class="message info m-t-2">
                <p>Currently there are no Events in the Database. Add a new Event by clicking on the "Events & News" link on the sidebar</p>
            </div>
            
            @endforelse
            
            <div class="page-links flex">
                {{ $events->links('pagination.pagination') }}    
            </div>

        </div>
    </div>

@endsection