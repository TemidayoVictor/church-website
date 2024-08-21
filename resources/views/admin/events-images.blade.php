@extends('layouts.adminLayout')

@section('title')
    Add Event Images
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Events</h1>
            <p>Add Images to Events</p>
        </div>
    </section>

    <div class="btn-container flex">
        <a href="Events-all.html" class="btn">View all Events</a>
        <a href="latest.html" class="btn">Add Latest News</a>
    </div>

    <div class="container">
        
        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        
        <form action="{{ route('addEventImages', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="">Upload Image [accepts only image files]</label>
                <input type="file" name="image" accept="image/*">
            </div>

            @error('image')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <input type="submit" value="Upload Image" class="btn m-t-1">

        </form>
        
        <p style="font-size: 1.7rem; border-top: 1px solid var(--color-primary); padding-top:.5em" class="m-t-1">Image Gallery</p>

            <div class="images">
                @forelse ($images as $image)
                    <form action="{{ route('deleteEventImages', ['id' => $image->id]) }}" method="post" enctype="multipart/form-data" class="image-content">
                        @csrf
                        <img src={{ asset('eventImages/'.$image->image) }} alt="">
                        <input type="submit" class="btn" value="Delete">
                    </form>
                @empty
                    <div class="message info m-t-1">
                        <p>No Image has been added to this Event. Add Images with the form above</p>
                    </div>    
                @endforelse
            </div>
            
    </div>

@endsection