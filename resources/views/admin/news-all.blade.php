@extends('layouts.adminLayout')

@section('title')
    Latest News
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Latest News</h1>
            <p>Edit or Delete Previous Confessions</p>
        </div>
    </section>


    <div class="container m-t-2">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <div class="devotionals m-t-2">
            @forelse ($allNews as $news)
                <div class="devotional">
                    <div class="title flex">
                        <h1>{{ $news->title }} </h1>
                        <div class="options flex">
                            <a href="{{ route('editNews', ['id' => $news->id]) }}" class="btn edit"> Edit</a>
                            <form action="{{ route('deleteNews', ['id' => $news->id]) }}" method="post">
                                @csrf
                                <input type="submit" class="btn" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>

            @empty

                <div class="message info m-t-2">
                    <p>Currently there are no News in the Database. Add new News detail by clicking on the "Events & News" link on the sidebar</p>
                </div>
                
            @endforelse

            @if ($count > 0)
                <div class="page-links flex">
                    <a href="#" class="prev btn btn-inline">Previous</a>
                    <a href="#" class="next btn btn-inline">Next</a>
                </div>
            @endif        
        </div>
    </div>
@endsection