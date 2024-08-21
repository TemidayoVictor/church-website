<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confession;
use App\Models\Devotional;
use App\Models\Events;
use App\Models\EventImage;
use App\Models\Library;
use App\Models\Message;
use App\Models\News;
use App\Models\Utility;

class NavigatorController extends Controller
{
    public function home() {
        $utility = Utility::first();
        $news = News::orderBy('id', 'desc')->first();
        return view('home', [
            'selected' => 'home',
            'show' => 'none',
            'utility' => $utility,
            'newsItem' => $news,
        ]);
    }

    public function about() {
        return view('about', [
            'selected' => 'about',
            'show' => 'none',
        ]);
    }

    public function tvh() {
        return view('tvh', [
            'selected' => 'about',
            'show' => 'none',
        ]);
    }

    public function lgi() {
        return view('lgi', [
            'selected' => 'about',
            'show' => 'none',
        ]);
    }

    public function bol() {
        return view('bol', [
            'selected' => 'about',
            'show' => 'none',
        ]);
    }

    public function pastorniyi() {
        return view('pastorniyi', [
            'selected' => 'about',
            'show' => 'none',
        ]);
    }

    public function pastorfunmi() {
        return view('pastorfunmi', [
            'selected' => 'about',
            'show' => 'none',
        ]);
    }

    public function messages() {
        $messages = Message::orderBy('id', 'desc')->paginate(10);
        return view('messages', [
            'selected' => 'media',
            'show' => 'resources',
            'showSelected' => 'messages',
            'messages' => $messages,
        ]);
    }

    public function library() {
        $books = Library::all();
        return view('library', [
            'selected' => 'media',
            'show' => 'resources',
            'showSelected' => 'library',
            'books' => $books,
        ]);
    }

    public function confessions() {
        $confessions = Confession::all();
        return view('confessions', [
            'selected' => 'media',
            'show' => 'resources',
            'showSelected' => 'confessions',
            'confessions' => $confessions,
        ]);
    }

    public function messagesView($id) {
        $message = Message::find($id);
        return view('messages-view', [
            'selected' => 'media',
            'show' => 'resources',
            'showSelected' => 'messages',
            'message' => $message,
        ]);
    }

    public function libraryView($id) {
        $book = Library::find($id);
        return view('library-view', [
            'selected' => 'media',
            'show' => 'resources',
            'showSelected' => 'library',
            'book' => $book,
        ]);
    }

    public function dailyInspiration() {
        $devotion = Devotional::latest()->first();
        $news = News::orderBy('id', 'desc')->get();
        return view('daily-inspiration', [
            'selected' => 'devotional',
            'show' => 'latestNews',
            'devotion' => $devotion,
            'news' => $news,
        ]);
    }

    public function dailyInspirationView() {
        $devotions = Devotional::orderBy('id', 'desc')->paginate(30);
        $news = News::orderBy('id', 'desc')->get();
        return view('daily-inspiration-view', [
            'selected' => 'devotional',
            'show' => 'latestNews',
            'devotions' => $devotions,
            'news' => $news,
        ]);
    }

    public function dailyInspirationToday($id) {
        $devotion = Devotional::find($id);
        $news = News::orderBy('id', 'desc')->get();
        return view('daily-inspiration-today', [
            'selected' => 'devotional',
            'show' => 'latestNews',
            'devotion' => $devotion,
            'news' => $news,
        ]);
    }

    public function events() {
        $events = Events::orderBy('id', 'desc')->paginate(15);
        $news = News::orderBy('id', 'desc')->get();
        return view('events', [
            'selected' => 'events',
            'show' => 'latestNews',
            'events' => $events,
            'news' => $news,
        ]);
    }

    public function eventsView($id) {
        $event = Events::find($id);
        $eventImages = EventImage::where('event', $id)->get();
        $news = News::orderBy('id', 'desc')->get();
        return view('events-view', [
            'selected' => 'events',
            'show' => 'latestNews',
            'event' => $event,
            'eventImages' => $eventImages,
            'news' => $news,
        ]);
    }

    public function give() {
        $news = News::orderBy('id', 'desc')->get();
        return view('give', [
            'selected' => 'give',
            'show' => 'latestNews',
            'news' => $news,
        ]);
    }

}
