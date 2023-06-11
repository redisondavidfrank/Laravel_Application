<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController; 
use App\Http\Controllers\MainController;

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

Route::get('/', function () {
    return view('welcome');
}); 

/*
This is the route for login and signup form. whenever the user use /signup and
/login this route checks if the information is valid.
*/
Route::group(['middleware' => 'guest'], function () {
    Route::get('/signup', [UsersController::class, 'create'])->name('signup');
    Route::post('/signup', [UsersController::class, 'store'])->name('signup');
    Route::get('/login', [UsersController::class, 'index'])->name('login');
    Route::post('/login', [UsersController::class, 'loginPost'])->name('login');
});

/*
This is the route for homepage and logout. whenever the user use /home the user 
will be redirected to homepage and when the user decides to press the logout button
the /logout will be used and will redirect the user to login page form.
*/
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [UsersController::class, 'main']);
    Route::delete('/logout', [UsersController::class, 'logout'])->name('logout');
});
/*
This is the route for add form. whenever the user choose to add a new add assignment
the route will use /add to redirect the user to the Add Assignment Form, and when
inside the form if the user clicks the Add Assignment button the function from 
UsersController Addassignment will proccess and adds the new information on the 
homepage table.
*/
Route::get('/add', [UsersController::class, 'add']);
Route::post('/add', [UsersController::class, 'Addassignment'])->name('add');

/*
This is the route to access the homepage.
*/
Route::get('/home', [MainController::class, 'index']);

/*
This is the route to access the Update Assignment Form. Uses updatetab function from
UsersController to show the form and whenever the Update Assignment button is use 
by the user it will use the updateAssignment function to update the information 
inputed by the user on the homepage table.
*/
Route::get('/update', [UsersController::class, 'updatetab']);
Route::post('/update', [UsersController::class, 'updateAssignment'])->name('update');

/*
This is the route to access the Delete Assignment Form. delete function to show the
form and uses deletedata function whenever the user clicks the Delete Assignment 
button.
*/
Route::get('/delete', [UsersController::class, 'delete']);
Route::post('/delete', [UsersController::class, 'deletedata'])->name('delete');

/*
This is the route to access the Student Information page.
*/
Route::get('/studentinfo', [UsersController::class, 'studentdata']);

/*
This is the route to access the Update Student Information Form page.
studentupdate is used to show the form and updateStudent function is used whenever
the Update button is clicked by the user to update the data and will redirect 
the user to the Student Information page.
*/
Route::get('/studentupdate', [UsersController::class, 'studentupdate']);
Route::post('/studentupdate', [UsersController::class, 'updateStudent'])->name('studentupdate');
/*
This is the route to access the A Add Student Information Form page.
studentAdd is used to show the form and Addstudent function is used whenever
the Add button is clicked by the user to add the new data of student 
and will redirect the user to the Student Information page.
*/

Route::get('/addstudent', [UsersController::class, 'studentAdd']);
Route::post('/addstudent', [UsersController::class, 'Addstudent'])->name('addstudent');
