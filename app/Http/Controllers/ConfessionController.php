<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confession;

use Illuminate\Support\Facades\File;

class ConfessionController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        return view('admin.confessions-add', [
            'selected' => 'confession',
        ]);
    }

    public function addConfession(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'video' => 'required',
        ]);

        $newVideoName = time(). '.' . $request->video->extension();
        $request->video->move(public_path('videos'), $newVideoName);

        Confession::create([
            'title' => $request->title,
            'video' => $newVideoName,
        ]);

        return redirect()->back()->with('status', 'Confession Added Successfully');
    }

    public function allConfessions() {
        $confessions = Confession::get();
        $count = $confessions->count();
        return view('admin.confessions-all', [
            'selected' => 'confession',
            'confessions' => $confessions,
            'count' => $count,
        ]);
    }

    public function editConfession($id) {
        $confession = Confession::find($id);
        return view('admin.confessions-edit', [
            'selected' => 'confession',
            'confession' => $confession,
        ]);
    }

    public function editConfessionPost(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'initialVideo',
            'video',
        ]);

        if(empty($request->video)) {
            $newVideoName = $request->initialVideo;
        }

        else {
            File::delete(public_path('videos/'.$request->initialVideo));
            $newVideoName = time(). '.' . $request->video->extension();
            $request->video->move(public_path('videos'), $newVideoName);
        }

        Confession::where('id', $id)->
        update([
            'title' => $request->title,
            'video' => $newVideoName,
        ]);

        return redirect()->back()->with('status', 'Confession Updated Successfully');

    }

    public function deleteConfession($id) {
        $confession = Confession::find($id);
        if($confession) {
            $video = $confession->video;
            $confession->delete();
            File::delete(public_path('videos/'.$video));
            return redirect()->back()->with('status', 'Confession Deleted Successfully');
        }

        else {
            return redirect()->back();
        }
    }
}
