@extends('layouts.baseLayout')

@section('title')
Events & Latest News
@endsection

@section('header')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>Events & News</h1>
            <p>Stay connected and updated about all our activities</p>
        </div>
    </section>

@endsection

@section('content')
    <div class="events">
        <h1>Our Events Collection</h1>
        @forelse ($events as $event)
            <div class="events-content flex">
                <div class="event-image">
                    <img src="{{ asset('images/'.$event->image) }}" alt="">
                </div>
                <div class="event-details">
                    <h3>{{ $event->title }}</h3>
                    <p class="bod-bot pb-1 mb-1">{{ Str::limit (strip_tags($event->description), 150) }}</p>
                    <div class="sub-section flex">
                        <p><i><b>{{ $event->minister }}</b></i></p>
                        <a href="{{ route('eventsView', ['id' => $event->id]) }}" class="msg-btn">view event</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="status-info">
                Stay tuned. Our Events will be available here.
            </div>    
        @endforelse
        <div class="page-links flex" style="margin-top: 30px">
            {{ $events->links('pagination.pagination') }}    
        </div>
    </div>
    
@endsection
