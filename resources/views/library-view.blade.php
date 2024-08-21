@extends('layouts.baseLayout')

@section('title')
The Purposeful Library
@endsection


@section('content')

    <div class="media">
        <h1>{{ $book->title }}</h1>
        <div class="messages-container">
            <div class="message-body flex">
                <div class="message-image w-100">
                    <img src="{{ asset('libraryImages/'.$book->image) }}" alt="">
                </div>
                <div class="message-details">
                    <h2>By {{ $book->author }}</h2>
                    <div class="mb-1 bod-bot pb-1">{!! (str_replace( '<p>&nbsp;</p>', '', $book->description)) !!}</div>
                    <div class="flex">
                        <a class="msg-btn" href="{{ 'https://'.$book->link }}">Download Book</a>
                        <a href="{{ route('give') }}" class="msg-btn">Make a Donation</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection


