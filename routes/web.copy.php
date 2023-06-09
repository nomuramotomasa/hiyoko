<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BookController;

use App\Http\Controllers\HiyokoUserController;
use App\Http\Controllers\TweetController;

use App\Models\Coach;
use App\Models\Team;
use App\Models\Player;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('books', BookController::class);

use App\Http\Controllers\SampleController;

Route::get('/sample', [SampleController::class, 'index'])->name('sample.index');
//名前つきルートname()

//ルート情報を見るコマンド
//php artisan route:list

//DB保存はPOST
Route::get('/contact_form',[ContactFormController::class, 'index'])->name('contact.index');
Route::get('/contact_form/{id}',[ContactFormController::class, 'show'])->name('contact.show');
Route::get('/contact_form/{id}/edit',[ContactFormController::class, 'edit'])->name('contact.edit');
Route::post('/contact_form/{id}',[ContactFormController::class, 'update'])->name('contact.update');
Route::post('/contact_form/{id}/delete',[ContactFormController::class, 'delete'])->name('contact.delete');

Route::post('/contact_form/confirm',[ContactFormController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact_form/complete',[ContactFormController::class, 'store'])->name('contact.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::resource('cafes', CafeController::class)->middleware('auth');

Route::get('/coach', function(){
    /* Coach モデルを通じて、coaches テーブルの内容をすべて取得 */
    $all_coaches = Coach::all();
    foreach($all_coaches as $coach){
        /* $coach->teamで、関連付けされたteams テーブルのレコードの内容を取得できる */
        print("<p>監督名： {$coach->name} (担当チーム名： {$coach->team->name})</p>");
    }
});

Route::get('/team', function(){
    /* Team モデルを通じて、teams テーブルのデータをすべて取得 */
    $all_teams = Team::all();
    foreach($all_teams as $team){
        /* $team->playersで、関連付けされたteams テーブルのレコードの内容を取得できる */
        print("<h2>チーム名： {$team->name}</h2>");
        print("<p>所属プレイヤー</p>");
        print('<ul>');
            /* Team モデルとPlayer モデルのリレーションは一対多(hasMany)
             * 複数データが取得されるため、foreachでループしてひとつずつ処理する
             */
            foreach($team->players as $player) {
                print("<li>{$player->name}</li>");
            }
        print('</ul>');
    }
});

Route::get('/team-to-coach', function(){
    /* Team モデルを通じて、teams テーブルのデータをすべて取得 */
    $all_teams = Team::all();
    foreach($all_teams as $team){
        /* nullの場合があるので、ifでチェック */
        if ($team->coach != null){
            $coach = $team->coach->name; //TeamからbelongsToでcoachに繋いでる
        } else {
            $coach = '';
        }
        print("<h2>チーム名： {$team->name} (監督：{$coach}) </h2>");
        print("<p>所属プレイヤー</p>");
        print('<ul>');
            /* $team->playersで、関連付けされたteams テーブルのレコードの内容を取得できる
             * Team モデルとPlayer モデルのリレーションは一対多(hasMany)
             * 複数データが取得されるため、foreachでループしてひとつずつ処理する
             */
            foreach($team->players as $player) {
                print("<li>{$player->name}</li>");
            }
        print('</ul>');
    }
});

Route::get('player', function(){
    /* Player モデルを通じて、players テーブルのデータをすべて取得 */
    $all_players = Player::all();
    foreach($all_players as $player){
        /* null の場合があるので、if でチェック */
        if ($player->team != null){
            $team = $player->team->name;
        } else {
            $team = '';
        }
        print("<h2>プレイヤー名： {$player->name} (所属チーム: {$team})</h2>");
        print("<p>得意ポジション</p>");
        print('<ul>');
            /* $player->positionsで、関連付けされたpositions テーブルのレコードの内容を取得できる
            * Player モデルとPosition モデルのリレーションは多対多(belongsToMany)
            * 複数データが取得されるため、foreachでループしてひとつずつ処理する
            */
            foreach($player->positions as $position){
                print("<li>{$position->name}</li>");
            }
        print('</ul>');
    }
});


Route::resource('hiyokousers', HiyokoUserController::class);
Route::resource('tweets', TweetController::class);
