@extends('layouts.adminLayout')

@section('title')
    Utilities Page
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Utilities</h1>
            <p>Edit / Update Utility</p>
        </div>
    </section>

    <div class="container m-t-2">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <form action="{{ route('editUtility', ['id' => $utility->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="">Title</label>
                <input type="text" name="title" placeholder="Title" value="{{ $utility->title }}" style="@error('title') border: 1px solid red; @enderror">
            </div>

            @error('title')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Subtitle for the Month</label>
                <input type="text" name="subtitle" placeholder="Subtitle for the Month" value="{{ $utility->subtopic }}" style="@error('subtitle') border: 1px solid red; @enderror">
            </div>

            @error('subtitle')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Anchor Scripture for the Month</label>
                <textarea name="scripture" id="" cols="30" rows="10" placeholder="Anchor Scripture for the Month" style="@error('scripture') border: 1px solid red; @enderror" >{{ $utility->body }}</textarea>
            </div>

            @error('scripture')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Upload Image File [accepts only image files]</label>
                <input type="text" value="{{ $utility->image }}" name="initialImage" readonly>
                <input type="file" name="image" class="m-t-1" accept="image/*">
            </div>

            @error('image')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <input type="submit" value="Update Utility" class="btn m-t-2">

        </form>
    </div>

@endsection