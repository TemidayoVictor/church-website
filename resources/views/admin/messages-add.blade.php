@extends('layouts.adminLayout')

@section('title')
    Upload Message
@endsection

@section('content')
    <section class="heading">
        <div class="welcome-text">
            <h1>Messages of the House</h1>
            <p>Add a new message to Collection</p>
        </div>
    </section>

    <div class="btn-container">
        <a href="{{ route('allMessages') }}" class="btn">View all Messages</a>
    </div>

    <div class="container">

        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <form action="{{ route('addMessage') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="">Topic of Message</label>
                <input type="text" name="topic" placeholder="Message Topic" value="{{ old('topic') }}" style="@error('topic') border: 1px solid red; @enderror" required>
            </div>

            @error('topic')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Brief Description of Message</label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Message Description" style="@error('description') border: 1px solid red; @enderror" required>{{ old('description') }}</textarea>
            </div>

            @error('description')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Occasion of Service</label>
                <select name="occasion" id="">
                    <option value="Super Celebration Service">Super Celebration Service [Sunday Service]</option>
                    <option value="Communion Service">Communion Service [Tuesday Service]</option>
                    <option value="Special Service">Special Service</option>
                </select>
            </div>

            @error('occasion')
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
                <input type="date" name="date" value="{{ old('date') }}" style="@error('topic') border: 1px solid red; @enderror" required>
            </div>

            @error('date')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <input type="submit" value="Upload Message" class="m-t-2 btn">

        </form>
    </div>
@endsection

@section('scriptJs')
    {{-- <script>
        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script> --}}
@endsection