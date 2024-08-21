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
        <h1>{{ $event->title }}</h1>
        <div class="event-description bod-bot">
            <h1 class="title-2">Description</h1>
            <div>{!! (str_replace( '<p>&nbsp;</p>', '', $event->description)) !!}</div>
        </div>
        <div class="event-description pb-1 bod-bot">
            <h1 class="title-2 mb-1">Audio Message</h1>
            <div class="audio flex mb-1">
                <audio controls> <source src="{{ asset('audio/'.$event->audio) }}"> </audio>
                {{-- <button>Download Message</button> --}}
            </div>
        </div>
        <div class="event-description pb-1">
            <h1 class="title-2 mb-1">Image Gallery</h1>
            <div class="image-gallery">
                @forelse ($eventImages as $eventImage)
                    <div class="image-content">
                        <img src="{{ asset('eventImages/'.$eventImage->image) }}" alt="">
                    </div>
                @empty
                    <div class="status-info">
                        <p>Stay tuned. Images from this events will be available here.</p>
                    </div>    
                @endforelse
            
            </div>                 
        </div>
    </div>

@endsection
