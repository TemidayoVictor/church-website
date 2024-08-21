<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devotional;
use Carbon\Carbon;

class DevotionalController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        return view('admin.devotionals-add', [
            'selected' => 'devotional',
        ]);
    }

    public function addDevotion(Request $request) {
        $this->validate($request, [
            'topic' => 'required',
            'body' => 'required',
            'prayer'
        ]);

        $date = Carbon::now();
        $dateString = $date->toFormattedDateString();

        Devotional::create([
            'topic' => $request->topic,
            'body'  => $request->body,
            'prayer' => $request->prayer,
            'dateuploaded' => $dateString,
        ]);

        return redirect()->route('addDevotional')->with('status', 'Daily Inspiration Created Successfully');        

    } 

    public function allDevotionals() {
        $devotionals = Devotional::orderBy('id', 'desc')->paginate(40);
        $count = $devotionals->count();
            
        return view('admin.devotionals-all', [
            'devotionals' => $devotionals,
            'selected' => 'devotional',
            'count' => $count,
        ]);
    }

    public function editDevotional($id) {
        $devotional = Devotional::find($id);
        return view('admin.devotionals-edit', [
            'devotional' => $devotional,
            'selected' => 'devotional',
        ]);
    }

    public function editDevotionalPost(Request $request, $id) {
        $this->validate($request, [
            'topic' => 'required',
            'body' => 'required',
            'prayer'
        ]);

        Devotional::where('id', $id)->
        update([
            'topic' => $request->topic,
            'body'  => $request->body,
            'prayer' => $request->prayer,
        ]);

        return redirect()->back()->with('status', 'Daily Inspiration Updated Successfully');
    }

    public function deleteDevotional($id) {
        $devotional = Devotional::find($id);
        if($devotional) {
            $devotional->delete();
            return redirect()->back()->with('status', 'Daily Inspiration Deleted Successfully');
        }

        else {
            return redirect()->back();
        }
    }


}
