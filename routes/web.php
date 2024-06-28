<?php

use Illuminate\Support\Facades\Route;
use App\Models\Game;

// Redirect to home
Route::get('/', function () {
    return view('welcome');
});

// Index of games
Route::get('/games', function () {
    $games = Game::all();
    return view('games.index', compact('games'));
});

// Go to create formges
Route::get('/games/create', function (){
   return view('games.create');
});

// Saves form in database
Route::post('/games', function (\Illuminate\Http\Request $request) {
   $game = $request->validate([
       'name' => 'required|string|min:5|max:20',
   ]);

   Game::create($game);

   return redirect('/games');
});

// Show game based on id
Route::get('/games/{game}', function (Game $game){
    return view('games.show', compact('game'));
});

// Go to edit form of game based on id
Route::get('/games/{game}/edit', function (Game $game){
    return view('games.edit', compact('game'));
});

Route::put('/games/{game}', function (\Illuminate\Http\Request $request, Game $game){
    $game->update($request->validate([
        'name' => 'required|string|min:5|max:20',
    ]));

    $game->save();

    return redirect('/games');
});

Route::delete('/games/{game}', function (Game $game){
    $game->delete();

    return redirect('/games');
});
