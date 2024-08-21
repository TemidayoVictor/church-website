@extends('layouts.baseLayout')

@section('title')
Messages of the House
@endsection


@section('content')
    <div class="media">
        <h1>Messages of the House</h1>
        <div class="messages-container">
            @forelse ($messages as $message)
                <div class="message-content">
                    {{-- <div class="message-image">
                        <img src="{{ asset('images/'.$message->image) }}" alt="">
                    </div> --}}
                    <div class="message-description">
                        <h3>{{ $message->topic }}</h3>
                        <div class="sub-section">
                            <p>{{ $message->occasion }}</p>
                            <a href="{{ route('messagesView', ['id' => $message->id]) }}" class="msg-btn block">View</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="status-info">
                    <p>Stay tuned. Our latest messages will appear here.</p>
                </div>    
            @endforelse
            
        </div>
        <div class="page-links flex" style="margin-top: 30px">
            {{ $messages->links('pagination.pagination') }}    
        </div>
    </div>
@endsection


