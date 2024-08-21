@extends('layouts.adminLayout')

@section('title')
    Edit Message
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Messages of the House</h1>
            <p>Edit or Delete Previous Messages</p>
        </div>
    </section>


    <div class="container m-t-2">
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
    
        <div class="devotionals m-t-2">
        
            @forelse ($messages as $message)
                <div class="devotional">
                    <div class="title">
                        <h1>{{ $message->topic }}</h1>
                    </div>
                    <div class="details flex">
                        <h2>{{ $message->occasion }}</h2>
                        <div class="options flex">
                            <a href="{{ route('editMessage', ['id' => $message->id]) }}" class="btn edit"> Edit</a>
                            <form action="{{ route('deleteMessage', ['id' => $message->id]) }}" method="post">
                                @csrf
                                <input type="submit" class="btn" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            @empty

            <div class="message info m-t-2">
                <p>Currently there are no Messages in the Database. Add a new Message by clicking on the "Messages" link on the sidebar</p>
            </div>
                
            @endforelse

            <div class="page-links flex">
                {{ $messages->links('pagination.pagination') }}    
            </div>

        </div>
    </div>
@endsection