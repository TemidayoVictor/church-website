<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DevotionalController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ConfessionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\NavigatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NavigatorController::class, 'home'])->name('home');

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'logUserIn']);

Route::post('/logout', [LogoutController::class, 'logUserOut'])->name('logout');

Route::get('/admin/add-Admin', [RegisterController::class, 'index'])->name('addAdmin');
Route::post('/admin/add-Admin', [RegisterController::class, 'addAdmin']);

Route::get('/admin/add-devotional', [DevotionalController::class, 'index'])->name('addDevotional');
Route::post('/admin/add-devotional', [DevotionalController::class, 'addDevotion']);

Route::get('/admin/all-devotionals', [DevotionalController::class, 'allDevotionals'])->name('allDevotionals');

Route::get('/admin/edit-devotionals/{id}', [DevotionalController::class, 'editDevotional'])->name('editDevotional');
Route::post('/admin/edit-devotionals/{id}', [DevotionalController::class, 'editDevotionalPost']);

Route::post('/admin/delete-devotionals/{id}', [DevotionalController::class, 'deleteDevotional'])->name('deleteDevotional');

Route::get('/admin/add-message', [MessageController::class, 'index'])->name('addMessage');
Route::post('/admin/add-message', [MessageController::class, 'storeMessage']);

Route::get('/admin/all-messages', [MessageController::class, 'allMessages'])->name('allMessages');

Route::get('/admin/edit-messages/{id}', [MessageController::class, 'editMessage'])->name('editMessage');
Route::post('/admin/edit-messages/{id}', [MessageController::class, 'editMessagePost']);

Route::post('/admin/delete-messages/{id}', [MessageController::class, 'deleteMessage'])->name('deleteMessage');

Route::get('/admin/add-book', [LibraryController::class, 'index'])->name('addLibrary');
Route::post('/admin/add-book', [LibraryController::class, 'addLibrary']);

Route::get('/admin/all-books', [LibraryController::class, 'allBooks'])->name('allBooks');

Route::get('/admin/book/{id}', [LibraryController::class, 'editBook'])->name('editBook');
Route::post('/admin/book/{id}', [LibraryController::class, 'editBookPost']);

Route::post('/admin/delete-book/{id}', [LibraryController::class, 'deleteBook'])->name('deleteBook');

Route::get('/admin/add-confession', [ConfessionController::class, 'index'])->name('addConfession');
Route::post('/admin/add-confession', [ConfessionController::class, 'addConfession']);

Route::get('/admin/all-confessions', [ConfessionController::class, 'allConfessions'])->name('allConfessions');

Route::get('/admin/edit-confessions/{id}', [ConfessionController::class, 'editConfession'])->name('editConfession');
Route::post('/admin/edit-confessions/{id}', [ConfessionController::class, 'editConfessionPost']);

Route::post('/admin/delete-confessions/{id}', [ConfessionController::class, 'deleteConfession'])->name('deleteConfession');

Route::get('/admin/add-events', [EventController::class, 'index'])->name('addEvents');
Route::post('/admin/add-events', [EventController::class, 'addEvents']);

Route::get('/admin/all-events', [EventController::class, 'allEvents'])->name('allEvents');

Route::get('/admin/edit-events/{id}', [EventController::class, 'editEvent'])->name('editEvent');
Route::post('/admin/edit-events/{id}', [EventController::class, 'editEventPost']);

Route::post('/admin/delete-event/{id}', [EventController::class, 'deleteEvent'])->name('deleteEvent');

Route::get('/admin/add-event-image/{id}', [EventController::class, 'addEventImages'])->name('addEventImages');
Route::post('/admin/add-event-image/{id}', [EventController::class, 'addEventImagesPost']);

Route::post('/admin/delete-event-image/{id}', [EventController::class, 'deleteEventImages'])->name('deleteEventImages');

Route::get('/admin/add-news', [NewsController::class, 'index'])->name('addNews');
Route::post('/admin/add-news', [NewsController::class, 'addNews']);

Route::get('/admin/all-news', [NewsController::class, 'allNews'])->name('allNews');

Route::get('/admin/edit-news/{id}', [NewsController::class, 'editNews'])->name('editNews');
Route::post('/admin/edit-news/{id}', [NewsController::class, 'editNewsPost']);

Route::post('/admin/delete-news/{id}', [NewsController::class, 'deleteNews'])->name('deleteNews');

Route::get('/admin/utilities', [UtilitiesController::class, 'index'])->name('utilities');
Route::post('/admin/edit-utilities/{id}', [UtilitiesController::class, 'editUtility'])->name('editUtility');

Route::get('/home', [NavigatorController::class, 'home'])->name('home');

Route::get('/about-us', [NavigatorController::class, 'about'])->name('about');

Route::get('/the-vantage-hub', [NavigatorController::class, 'tvh'])->name('tvh');

Route::get('/the-lifegate-institute', [NavigatorController::class, 'lgi'])->name('lgi');

Route::get('/the-breathe-of-life', [NavigatorController::class, 'bol'])->name('bol');

Route::get('/pastor-tope-oyeneye', [NavigatorController::class, 'pastorniyi'])->name('pastorniyi');

Route::get('/pastor-tolu-oyeneye', [NavigatorController::class, 'pastorfunmi'])->name('pastorfunmi');

Route::get('/messages', [NavigatorController::class, 'messages'])->name('messages');
Route::get('/messages-view/{id}', [NavigatorController::class, 'messagesView'])->name('messagesView');

Route::get('/library', [NavigatorController::class, 'library'])->name('library');
Route::get('/library-view/{id}', [NavigatorController::class, 'libraryView'])->name('libraryView');

Route::get('/confessions', [NavigatorController::class, 'confessions'])->name('confessions');

Route::get('/timeless-truth', [NavigatorController::class, 'dailyInspiration'])->name('dailyInspiration');
Route::get('/timeless-truth-view', [NavigatorController::class, 'dailyInspirationView'])->name('dailyInspirationView');
Route::get('/timeless-truth-today/{id}', [NavigatorController::class, 'dailyInspirationToday'])->name('dailyInspirationToday');

Route::get('/events', [NavigatorController::class, 'events'])->name('events');
Route::get('/events-view/{id}', [NavigatorController::class, 'eventsView'])->name('eventsView');

Route::get('/give-online', [NavigatorController::class, 'give'])->name('give');