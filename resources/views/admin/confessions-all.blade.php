@extends('layouts.adminLayout')

@section('title')
    Confessions
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Confessions</h1>
            <p>Update or Delete Previous Confessions</p>
        </div>
    </section>


    <div class="container m-t-2">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <div class="devotionals m-t-2">

            @forelse ($confessions as $confession)
                <div class="devotional">
                    <div class="title flex">
                        <h1 style="width: 90%">{{ $confession->title }}</h1>
                        <div class="options flex">
                            <a href="{{ route('editConfession', ['id' => $confession->id]) }}" class="btn edit"> Edit</a>
                            <form action="{{ route('deleteConfession', ['id' => $confession->id]) }}" method="post">
                                @csrf
                                <input type="submit" class="btn" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            @empty

            <div class="message info m-t-2">
                <p>Currently there are no Confessons in the Database. Add a new Confession by clicking on the "Confession" link on the sidebar</p>
            </div>
    
            @endforelse

        </div>
    </div>

@endsection()