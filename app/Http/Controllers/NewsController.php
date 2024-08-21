<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

use Image;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    public function index() {
        return view('admin.news-add', [
            'selected' => 'events',
        ]);
    }

    public function addNews(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,webp|required',
            'web',
            'prompt',
        ]);

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

        if(empty($request->web)) {
            $web = "Null";
            $prompt = "Null";
        }

        else {
            $web = $request->web;
            $prompt = $request->prompt;
        }

        if(empty($request->prompt) && !empty($request->web)) {
            $prompt = "View";
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $newImageName,
            'web' => $web,
            'prompt' => $prompt,
        ]);

        return redirect()->back()->with('status', 'News Added Successfully');       
    }

    public function allNews() {
        $allNews = News::get();
        $count = $allNews->count();
        return view('admin.news-all', [
            'selected' => 'events',
            'allNews' => $allNews,
            'count' => $count,
        ]);
    }

    public function editNews($id) {
        $news = News::find($id);
        return view('admin.news-edit', [
            'selected' => 'events',
            'news' => $news,
        ]);
    }

    public function editNewsPost(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,webp',
            'initialDate',
            'web',
            'prompt',
        ]);

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

        if(($request->web != "Null") && ($request->prompt == "Null")) {
            $web = $request->web;
            $prompt = "View";
        }

        else {
            $web = $request->web;
            $prompt = $request->prompt;
        }

        if(empty($request->web)) {
            $web = "Null";
            $prompt = "Null";
        }
        
        News::where('id', $id)->
        update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $newImageName,
            'web' => $web,
            'prompt' => $prompt,
        ]);

        return redirect()->back()->with('status', 'News Updated Successfully');
    }

    public function deleteNews($id) {
        $news = News::find($id);
        if($news) {
            $image = $news->image;
            $news->delete();
            File::delete(public_path('images/'.$image));
            return redirect()->back()->with('status', 'News Deleted Successfully');
        }
        
        else {
            return redirect()->back();
        }
    }
}
