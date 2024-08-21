@extends('layouts.adminLayout')

@section('title')
    Daily Inspiration
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Timeless Truth</h1>
            <p>Edit or Delete Previous Devotionals</p>
        </div>
    </section>


    <div class="container m-t-2">
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <div class="devotionals m-t-2">
            @forelse ($devotionals as $devotional)
                <div class="devotional">
                    <div class="title">
                        <h1>{{ $devotional->topic }}</h1>
                    </div>
                    <div class="details flex">
                        <h2>{{ $devotional->dateuploaded }}</h2>
                        <div class="options flex">
                            <a href="{{ route('editDevotional', ['id' => $devotional->id]) }}" class="btn edit"> Edit</a>
                            <form action="{{ route('deleteDevotional', ['id' => $devotional->id]) }}" method="post">
                                @csrf
                                <input type="submit" class="btn" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="message info m-t-2">
                    <p>Currently there are no devotionals in the Database. Create a new devotional by clicking on the "Daily Inspiration" link on the sidebar</p>
                </div>
            @endforelse 
            
            <div class="page-links flex">
                {{ $devotionals->links('pagination.pagination') }}    
            </div>
            
        </div>
    </div>

@endsection