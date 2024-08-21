@extends('layouts.adminLayout')

@section('title')
    Add New Event
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Events</h1>
            <p>Add a new Event to Collection</p>
        </div>
    </section>

    <div class="btn-container flex">
        <a href="{{ route('allEvents') }}" class="btn">View all Events</a>
        <a href="{{ route('addNews') }}" class="btn">Add Latest News</a>
    </div>

    <div class="container">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <form action="{{ route('addEvents') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="">Title of Event</label>
                <input type="text" name="title" placeholder="Title of Event" value="{{ old('title') }}" style="@error('title') border: 1px solid red; @enderror">
            </div>

            @error('title')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Brief Description of Event</label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Message Description" style="@error('description') border: 1px solid red; @enderror" >{{ old('description') }}</textarea>
            </div>

            @error('description')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Name of Minister or Guest Minister</label>
                <input type="text" name="minister" placeholder="Name of Minister or Guest Minister" value="{{ old('minister') }}" style="@error('minister') border: 1px solid red; @enderror">
            </div>

            @error('minister')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Upload Audio File [accepts only audio files]</label>
                <input type="file" name="audio" accept="audio/*">
            </div>

            @error('audio')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Upload Image File [accepts only image files]</label>
                <input type="file" name="image" accept="image/*">
            </div>

            @error('image')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Date</label>
                <input type="date" name="date" value="{{ old('date') }}" style="@error('date') border: 1px solid red; @enderror">
            </div>

            @error('date')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <input type="submit" value="Upload Event" class="btn m-t-2">

        </form>
    </div>

@endsection

@section('scriptJs')
    <script>
        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection