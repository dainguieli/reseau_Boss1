<?php

use App\Http\Controllers\AdminControlleur;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\RoomController;
use App\Http\Controllers\User\FriendController;
use App\Http\Controllers\User\MemberController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PostLikeController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\CommentLikeController;
use App\Http\Controllers\User\NotificationController;
use App\Models\Tache;
use App\Models\User;

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

Route::view('calendar', 'calendar')->name('calendar');

Route::post('chat','App\Http\Controllers\ChatController@store');

Route::get('chat','App\Http\Controllers\ChatController@index');
//Route::get('calendar', [CalendarController::class,'calendar'])->name('calendar');
Route::middleware(['guest'])->get('/', [WelcomeController::class, 'show'])->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->prefix('user')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');



    Route::get('profile/{user:username}', [ProfileController::class, 'show'])->name('profiles.show');

    Route::get('members', [MemberController::class, 'index'])->name('members.index');

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::post('', [PostController::class, 'store'])->name('store');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('comments')->name('comments.')->group(function () {
        Route::post('/{post}/comments', [CommentController::class, 'store'])->name('store');
    });

    Route::prefix('friends')->name('friends.')->group(function () {
        Route::get('', [FriendController::class, 'index'])->name('index');
        Route::post('/{user}', [FriendController::class, 'store'])->name('store');
        Route::patch('/{user}', [FriendController::class, 'update'])->name('update');
        Route::get('/{user}', [FriendController::class, 'deny'])->name('deny');
        Route::delete('/{user}', [FriendController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('post-like')->name('post-like.')->group(function () {
        Route::post('/{post}', [PostLikeController::class, 'store'])->name('store');
        Route::delete('/{post}', [PostLikeController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('comment-like')->name('comment-like.')->group(function () {
        Route::post('/{comment}', [CommentLikeController::class, 'store'])->name('store');
        Route::delete('/{comment}', [CommentLikeController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('notifications')->name('notifications.')->group(function () {
        Route::post('/mark-one/{id}', [NotificationController::class, 'store'])->name('store');
        Route::get('/mark-all', [NotificationController::class, 'update'])->name('update');
        Route::get('/mark-delete/{id}', [NotificationController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('chat/rooms')->name('chat-rooms.')->group(function () {
        Route::get('/', [RoomController::class, 'index'])->name('index');
        Route::get('/{room:slug}', [RoomController::class, 'show'])->name('show');
        Route::post('/{room:slug}', [RoomController::class, 'update'])->name('update');
        Route::post('/{room:slug}/messages', [RoomController::class, 'store'])->name('store');
    });
});

Route::post('/register/createClient', [AdminControlleur::class, 'UserRegisterCreate'])->name('admin.register_client');
//////ADMIN
Route::prefix('admin')->group(function () {

    Route::get('/login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.post');
    Route::post('/admin/logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

    Route::get('admin/chat/rooms', [RoomController::class, 'index'])->name('index');
    Route::get('admin/chat/rooms/{room:slug}', [RoomController::class, 'show'])->name('show');
    Route::post('admin/chat/rooms/{room:slug}', [RoomController::class, 'update'])->name('update');
    Route::post('admin/chat/rooms/{room:slug}/messages', [RoomController::class, 'store'])->name('store');
   
   //Supervieur 
    Route::get('/admin/liste_Adminsateur', [AdminControlleur::class, 'Adminsateur'])->name('admin.Adminsateur');
    Route::get('/admin/ajouterAdminsateur', [AdminControlleur::class, 'ajouterAdminsateur'])->name('admin.ajouterAdminsateur');
    Route::delete('/admin/supprimerAdminsateur/{id}', [AdminControlleur::class, 'supprimerAdminsateur'])->name('supprimerClient');
    Route::get('admin/modifierAdminsateur/{id}', [AdminControlleur::class, 'modifierAdminsateur'])->name('modifierAdminsateur');
    Route::put('/admin/mise_a_jour_Adminsateur/{id}', [AdminControlleur::class, 'mise_a_jour_Adminsateur'])->name('mise_a_jour_Adminsateur');
    Route::get('admin/infoAdminsateur/{id}', [AdminControlleur::class, 'infoAdminsateur'])->name('admin.infoAdminsateur');
    Route::post('/register/createAdminsateur', [AdminControlleur::class, 'AdminRegisterCreate'])->name('admin.AdminRegisterCreate');
    // User

    Route::get('/admin/liste_client', [AdminControlleur::class, 'Client'])->name('admin.Client');
    Route::get('/admin/ajouterClient', [AdminControlleur::class, 'ajouterClient'])->name('admin.ajouterClient');
    Route::delete('/admin/supprimerClient/{id}', [AdminControlleur::class, 'supprimerClient'])->name('supprimerClient');
    Route::get('admin/modifierClient/{id}', [AdminControlleur::class, 'modifierClient'])->name('modifierClient');
    Route::put('/admin/mise_a_jour_Client/{id}', [AdminControlleur::class, 'mise_a_jour_Client'])->name('mise_a_jour_Client');
    Route::get('admin/infoBenevole/{id}', [AdminControlleur::class, 'infoBenevole'])->name('admin.infoBenevole');
    Route::delete('admin/supprimerAgent/{id}', [AdminControlleur::class, 'supprimerAgent'])->name('supprimerAgent');
    Route::get('admin/modifierAgent/{id}', [AdminControlleur::class, 'modifierAgent'])->name('modifierAgent');
    Route::put('/admin/mise_a_jour_Agent/{id}', [AdminControlleur::class, 'mise_a_jour_Agent'])->name('mise_a_jour_Agent');
    // Tache 
    Route::delete('admin/supprimerAjouteTache/{idTache}/{idUser}', [AdminControlleur::class, 'suprTache'])->name('suprTache');
    Route::any('admin/utilisateurAjouteTache/{idTache}/{idUser}', [AdminControlleur::class, 'iscriTache'])->name('admin.infoTache');
    Route::get('/admin/liste_tache', [AdminControlleur::class, 'Tache'])->name('admin.Tache');
    Route::get('/admin/ajouterTache', [AdminControlleur::class, 'ajouterTache'])->name('admin.ajouterTache');
    Route::post('/admin/createClient/{id}', [AdminControlleur::class, 'TacheCreate'])->name('admin.TacheCreate');
    Route::post('/register/createClient', [AdminControlleur::class, 'TacheRegisterCreate'])->name('admin.register_tache');
    Route::delete('/admin/supprimerTache/{id}', [AdminControlleur::class, 'supprimerTache'])->name('supprimerTache');
    Route::get('admin/modifierTache/{id}', [AdminControlleur::class, 'modifierTache'])->name('modifierTache');
    Route::put('/admin/mise_a_jour_Tache/{id}', [AdminControlleur::class, 'mise_a_jour_Tache'])->name('mise_a_jour_Tache');
    Route::get('admin/infoTache/{id}', [AdminControlleur::class, 'infoTache'])->name('admin.infoTache');

    Route::get('admin/calendar', [CalendarController::class,'calendarAdmin'])->name('admin.calendar');

    Route::get('admin/modifierTache/{id}', [AdminControlleur::class, 'modifieTache'])->name('modifieTache');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            $taches = Tache::all();
            $users = User::all();
            return view('admin.dashboard.home.home')->with('taches', $taches)->with('users', $users);
        })->name('admin.dashboard');
    });

});
