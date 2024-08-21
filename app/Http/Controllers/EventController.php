<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Carbon\Carbon;
use App\Models\EventImage;

use Image;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    public function index() {
        return view('admin.events-add', [
            'selected' => 'events'
        ]);
    }

    public function addEvents(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'minister' => 'required',
            'audio' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,webp|required',
            'date' => 'required',
        ]);

        $date = new Carbon($request->date);
        $newDate = $date->toFormattedDateString();

        // move image into Images folder in public directory
    
        $image = $request->image;

        if($image->getSize() > 500 * 1024) {
            $resizedImage = Image::make($image)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $newImageName = time().'.'. $image->getClientOriginalExtension();
            $resizedImage->save(public_path('images/'. $newImageName));
        }

        else {
            $newImageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
        }

        // move audio to audio folder in public directory

        $newAudioName = time(). '.' . $request->audio->extension();
        $request->audio->move(public_path('audio'), $newAudioName);

        Events::create([
            'title' => $request->title,
            'description' => $request->description,
            'minister' => $request->minister,
            'audio' => $newAudioName,
            'image' => $newImageName,
            'date' => $newDate,
        ]);

        return redirect()->back()->with('status', 'Event Created Successfully');

        // dd($request->title.$request->description.$request->minister.$request->audio.$request->image.$request->date);
    }

    public function allEvents() {
        $events = Events::orderBy('id', 'desc')->paginate(10);
        $count = $events->count();
        return view('admin.events-all', [
            'selected' => 'events',
            'events' => $events,
            'count' => $count,
        ]);
    }

    public function editEvent($id) {
        $event = Events::find($id);
        return view('admin.events-edit', [
            'selected' => 'events',
            'event' => $event,
        ]);
    }

    public function editEventPost(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'minister' => 'required',
            'audio',
            'initialAudio',
            'image',
            'initialImage',
            'date',
            'initialDate',
        ]);

        if(empty($request->audio)) {
            $newAudioName = $request->initialAudio;    
        }

        else {
            File::delete(public_path('audio/'.$request->initialAudio));
            $newAudioName = time(). '.' . $request->audio->extension();
            $request->audio->move(public_path('audio'), $newAudioName); 
        }

        if(empty($request->image)) {
            $newImageName = $request->initialImage;
        }

        else {
            File::delete(public_path('images/'.$request->initialImage));

            $image = $request->image;

            if($image->getSize() > 500 * 1024) {
                $resizedImage = Image::make($image)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $newImageName = time().'.'. $image->getClientOriginalExtension();
                $resizedImage->save(public_path('images/'. $newImageName));
            }

            else {
                $newImageName = time(). '.' . $request->image->extension();
                $request->image->move(public_path('images'), $newImageName);
            }

            
        }

        if(empty($request->date)) {
            $newDate = $request->initialDate;
        }

        else {
            $date = new Carbon($request->date);
            $newDate = $date->toFormattedDateString(); 
        }

        Events::where('id', $id)->
        update([
            'title' => $request->title,
            'description' => $request->description,
            'minister' => $request->minister,
            'audio' => $newAudioName,
            'image' => $newImageName,
            'date' => $newDate,
        ]);

        return redirect()->back()->with('status', 'Event Updated Successfully');
    }

    public function addEventImages($id) {
        $images = EventImage::where('event', $id)->get();
        return view('admin.events-images', [
            'selected' => 'events',
            'id' => $id,
            'images' => $images,
        ]);
    }

    public function addEventImagesPost(Request $request, $id) {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,png,jpeg,webp|required',
        ]);

        // move image into Images folder in public directory

        $image = $request->image;

        if($image->getSize() > 500 * 1024) {
            $resizedImage = Image::make($image)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $newImageName = time().'.'. $image->getClientOriginalExtension();
            $resizedImage->save(public_path('eventImages/'. $newImageName));
        }

        else {
            $newImageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('eventImages'), $newImageName);
        }

        EventImage::create([
            'image' => $newImageName,
            'event' => $id,
        ]);

        return redirect()->back()->with('status', 'Image Added Successfully');

    }

    public function deleteEventImages($id) {
        $image = EventImage::where('id', $id)->first();
        if($image) {
            $imageName = $image->image;
            $image->delete();
            File::delete(public_path('eventImages/'.$imageName));
            return redirect()->back()->with('status', 'Image Deleted Successfully');
        }

        else {
            return redirect()->back();
        }
    }

    public function deleteEvent($id) {
        $event = Events::find($id);
        if($event) {
            $audio = $event->audio;
            $image = $event->image;
            $event->delete();
            File::delete(public_path('audio/'.$audio));
            File::delete(public_path('images/'.$image));
            return redirect()->back()->with('status', 'Event Deleted Successfully');
        }

        else {
            return redirect()->back();
        }
    }
}
 