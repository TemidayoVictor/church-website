@extends('layouts.baseLayout')

@section('title')
Confessions
@endsection

@section('content')
    <div class="media">
        <h1>Monthly Confessions</h1>
        <div class="library-container">
            @forelse ($confessions as $confession)
            <div class="confessions">
                <div class="video">
                    <video  controls> <source src="{{ asset('videos/'.$confession->video) }}"></video>
                    <h3>{{ $confession->title }}</h3>
                </div>
            </div>
            @empty
                <div class="status-info">
                    <p>Stay tuned. Our Confessions will be available here.</p>
                </div>
            @endforelse    
        </div>
        
    </div>
@endsection





