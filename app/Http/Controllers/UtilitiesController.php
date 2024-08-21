<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utility;

use Image;
use Illuminate\Support\Facades\File;

class UtilitiesController extends Controller
{
    public function index() {
        $utility = Utility::where('id', '1')->first();
        return view('admin.utilities', [
            'selected' => 'utilities',
            'utility' => $utility,
        ]);
    }

    public function editUtility(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'scripture' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,webp',
            'initialImage',
        ]);

        if(!empty($request->image)) {
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

        else {
            $newImageName = $request->initialImage;
        }

        Utility::where('id', $id)->
        update([
            'title' => $request->title,
            'subtopic' => $request->subtitle,
            'body' => $request->scripture,
            'image' => $newImageName,
        ]);

        return redirect()->back()->with('status', 'Utility Updated Successfully');

    }

}
