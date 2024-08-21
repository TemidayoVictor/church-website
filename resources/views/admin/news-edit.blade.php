@extends('layouts.adminLayout')

@section('title')
    Edit News
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Latest News</h1>
            <p>Edit / Update News</p>
        </div>
    </section>

    <div class="btn-container flex">
        <a href="{{ route('addEvents') }}" class="btn">Add Events</a>
        <a href="{{ route('allNews') }}" class="btn">View all News</a>
    </div>

    <div class="container">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <form action="{{ route('editNews', ['id' => $news->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="">Title of News</label>
                <input type="text" name="title" placeholder="Title of Event" value="{{ $news->title }}" style="@error('title') border: 1px solid red; @enderror">
            </div>

            @error('title')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Brief Description of News</label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Message Description" style="@error('description') border: 1px solid red; @enderror" >{{ $news->description }}</textarea>
            </div>

            @error('description')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Upload Image File [accepts only image files]</label>
                <input type="text" value="{{ $news->image }}" name="initialImage" readonly>
                <input type="file" name="image" class="m-t-1" accept="image/*">
            </div>

            @error('image')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Add web URL [optional]</label>
                <input type="text" name="web" placeholder="Add Web URL" value="{{ $news->web }}" style="@error('web') border: 1px solid red; @enderror">
            </div>

            @error('web')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Add Prompt for URL</label>
                <input type="text" name="prompt" placeholder="Add Prompt for URL" value="{{ $news->prompt }}" style="@error('prompt') border: 1px solid red; @enderror">
            </div>

            @error('prompt')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <input type="submit" value="Update News" class="btn">

        </form>
    </div>

@endsection