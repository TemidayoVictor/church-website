@extends('layouts.adminLayout')

@section('title')
    Confessions
@endsection

@section('content')
    <section class="heading">
        <div class="welcome-text">
            <h1>Confessions</h1>
            <p>Add a new Confession to Collection</p>
        </div>
    </section>

    <div class="btn-container">
        <a href="{{ route('allConfessions') }}" class="btn">View all Confessions</a>
    </div>

    <div class="container">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <form action="{{ route('addConfession') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="">Title of Confession</label>
                <input type="text" name="title" placeholder="Title of Confession" value="{{ old('title') }}" style="@error('title') border: 1px solid red; @enderror">
            </div>

            @error('title')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Upload Confession [accepts only video files]</label>
                <input type="file" name="video" accept="video/*" style="@error('video') border: 1px solid red; @enderror">
            </div>

            @error('video')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <input type="submit" value="Upload Confession" class="btn m-t-2">

        </form>
    </div>
@endsection