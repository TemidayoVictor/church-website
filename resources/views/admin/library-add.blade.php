@extends('layouts.adminLayout')

@section('title')
    The Purposeful Library
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>The Ecclesia Library</h1>
            <p>Add a new Book to Collection</p>
        </div>
    </section>

    <div class="btn-container">
        <a href="{{ route('allBooks') }}" class="btn">View all Books</a>
    </div>

    <div class="container">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <form action="{{ route('addLibrary') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="">Title of Book</label>
                <input type="text" name="title" placeholder="Title of Book" value="{{ old('title') }}" style="@error('title') border: 1px solid red; @enderror">
            </div>

            @error('title')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Author of Book</label>
                <input type="text" name="author" placeholder="Author of Book" value="{{ old('author') }}" style="@error('author') border: 1px solid red; @enderror">
            </div>

            @error('author')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Brief Description of Book</label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Brief Description of Book" style="@error('description') border: 1px solid red; @enderror">{{ old('description') }}</textarea>
            </div>

            @error('description')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Upload Book Cover [accepts only image files]</label>
                <input type="file" name="image" accept="image/*" style="@error('image') border: 1px solid red; @enderror">
            </div>

            @error('image')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Link or Web Url</label>
                <input type="text" name="link" value="{{ old('link') }}" style="@error('link') border: 1px solid red; @enderror">
            </div>

            @error('link')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <input type="submit" value="Upload Book" class="btn m-t-2">

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