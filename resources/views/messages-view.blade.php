@extends('layouts.baseLayout')

@section('title')
Messages of the House
@endsection


@section('content')

    <div class="media">
        <h1>{{ $message->topic }}</h1>
        <div class="messages-container">
            <div class="message-body flex">
                <div class="message-image w-100">
                    <img src="{{ asset('images/ecclogo2.png') }}" alt="">
                </div>
                <div class="message-details">
                    <h2>Description</h2>
                    <p>{{ $message->occasion }}</p>
                    <p class="mb-1">{{ $message->date }}</p>
                    <div class="mb-1">{!! (str_replace( '<p>&nbsp;</p>', '', $message->description)) !!}</div>
                    <div class="audio flex">
                        <audio controls> <source src="{{ asset('audio/'.$message->audio) }}"> </audio>
                        {{-- <button>Download Message</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


