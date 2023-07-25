<?php

use App\Http\Controllers\ProfileController;
use App\Models\User; // Imported
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    /*
        https://laravel.com/docs/10.x/queries
    */

    // return view('welcome');
    // dd("Krishna");

    /*
    === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === ===
                                            --- RAW DB QUERIES ---
    === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === ===
    */


    // SELECTING DATA
    // $users = DB::select('select name from users where email=?', ["mandalkrishna739@gmail.com"]);

    // INSERTING DATA
    // $user = DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Bob', 'bob@marley.com', 'password123']);

    // SHOWING DATA
    // $users = DB::select('select * from users');

    /*
    === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === ===
                                            --- QUERY BUILDERS ---
    === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === ===
    */


    // SHOWING DATA

    // $users = DB::table('users')->get(); // To get all items in database #####################################3

    // $users = DB::table('users')->where('id', 1)->get(); // To get all items in database

    // INSERTING DATA
    // $user = DB::table('users')->insert(['name' => "Tanjiro",'email' => 'kamado@tanjiro.com','password' => 'password123',]);

    // UPDATING DATA
    // $user = DB::table('users')->where('id', 1)->update(["name" => "Hello world"]);

    // DELETING DATA
    // $user = DB::table('users')->where('id', 2)->delete();


    // FIRST USER
    // $users = DB::table('users')->first();

    // WHERE CLAUSE
    // $users = DB::table('users')->where('name', 'Tanjiro')->first();
    // return $users->email; // Also prints email

    // $users = DB::table('users')->find(1); // Prints the value of according to id column
    // dd($users);

    /*
    === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === ===
                                            --- ORM ELOQUENT ---
    === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === === ===
    */

    // Selecting users ===
    // $users = User::where('id', 1)->first();

    // Creating New User  ===
    // $users = User::create([
    //     'name' => 'lion',
    //     'email' => 'hasira@tiger.com',
    //     'password' => '1234567890',
    // ]);

    // Updating User  ===
    // $users = User::find(9);
    // $users->update(['email' => 'hello@nezuko.com']);

    // // OR
    // $users = User::where('id', 9)->update(['email' => 'hello@nezuko.com']);

    // Deleting User ===
    // $users = User::find(9)->delete();

    // DISPLAYING ALL USERS ========================================
    // $users = User::all();
    dd($users);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
