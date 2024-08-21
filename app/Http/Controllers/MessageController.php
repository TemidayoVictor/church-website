<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Carbon\Carbon;

use Image;
use Illuminate\Support\Facades\File;

class MessageController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    public function index() {
        return view('admin.messages-add', [
            'selected' => 'message',
        ]);
    }

    public function storeMessage(Request $request) {
        $this->validate($request, [
            'topic' => 'required',
            'description' => 'required',
            'occasion' => 'required',
            'audio' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,webp|required',
            'date' => 'required',
        ]);

        $date = new Carbon($request->date);
        $newDate = $date->toFormattedDateString();
        // $image = $request->image;

        // move image into Images folder in public directory

        // if($image->getSize() > 500 * 1024) {
        //     $resizedImage = Image::make($image)->resize(500, null, function ($constraint) {
        //         $constraint->aspectRatio();
        //         $constraint->upsize();
        //     });

        //     $newImageName = time().'.'. $image->getClientOriginalExtension();
        //     $resizedImage->save(public_path('images/'. $newImageName));
        // }

        // else {
        //     $newImageName = time(). '.' . $request->image->extension();
        //     $request->image->move(public_path('images'), $newImageName);
        // }

        // move audio to audio folder in public directory

        $newAudioName = time(). '.' . $request->audio->extension();
        $request->audio->move(public_path('audio'), $newAudioName);

        Message::create([
            'topic' => $request->topic,
            'description' => $request->description,
            'occasion' => $request->occasion,
            'audio' => $newAudioName,
            'image' => "newImageName",
            'date' => $newDate,
        ]);

        return redirect()->back()->with('status', 'Message Added Successfully');

    }

    public function allMessages() {
        $messages = Message::orderBy('id', 'desc')->paginate(20);
        $count = $messages->count();

        return view('admin.messages-all', [
            'selected' => 'message',
            'messages' => $messages,
            'count' => $count,
        ]);
    }

    public function editMessage($id) {
        $message = Message::find($id);
        return view('admin.messages-edit', [
            'selected' => 'message',
            'message' => $message,
        ]);
    }

    public function editMessagePost(Request $request, $id) {
        $this->validate($request, [
            'topic' => 'required',
            'description' => 'required',
            'occasion' => 'required',
            'audio',
            'initialAudio',
            'image' => 'image|mimes:jpg,png,jpeg,webp',
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

        // if(empty($request->image)) {
        //     $newImageName = $request->initialImage;
        // }

        // else {
        //     File::delete(public_path('images/'.$request->initialImage));
            

        //     $image = $request->image;

        //     if($image->getSize() > 500 * 1024) {
        //         $resizedImage = Image::make($image)->resize(500, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //             $constraint->upsize();
        //         });
    
        //         $newImageName = time().'.'. $image->getClientOriginalExtension();
        //         $resizedImage->save(public_path('images/'. $newImageName));
        //     }
    
        //     else {
        //         $newImageName = time(). '.' . $request->image->extension();
        //         $request->image->move(public_path('images'), $newImageName);
        //     }
        // }

        if(empty($request->date)) {
            $newDate = $request->initialDate;
        }

        else {
            $date = new Carbon($request->date);
            $newDate = $date->toFormattedDateString(); 
        }

        Message::where('id', $id)->
        update([
            'topic' => $request->topic,
            'description' => $request->description,
            'occasion' => $request->occasion,
            'audio' => $newAudioName,
            'image' => "newImageName",
            'date' => $newDate,
        ]);
        
        return redirect()->back()->with('status', 'Message Updated Successfully');
    }

    public function deleteMessage($id) {
        $message = Message::find($id);
        if($message) {
            $audio = $message->audio;
            $image = $message->image;
            $message->delete();
            File::delete(public_path('audio/'.$audio));
            // File::delete(public_path('images/'.$image));
            return redirect()->back()->with('status', 'Message Deleted Successfully');
        }

        else {
            return redirect()->back();
        }
    }
}
