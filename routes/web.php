<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//frontend view 

//Route::get('/login',[HomeController::class,'login'])->name('home.login');
//Route::get('/register',[HomeController::class,'register'])->name('home.register');
Route::get('/profile',[HomeController::class,'profile'])->name('home.profile');
Route::get('/category',[HomeController::class,'category'])->name('home.category');
Route::get('/SingleBlog',[HomeController::class,'SingleBlog'])->name('home.SingleBlog');

//link page route
Route::get('/nlp',[HomeController::class,'nlp'])->name('home.nlp');
Route::get('/MobDev',[HomeController::class,'MobDev'])->name('home.MobDev');
Route::get('/macLearn',[HomeController::class,'macLearn'])->name('home.macLearn');
Route::get('/fullstack',[HomeController::class,'fullstack'])->name('home.fullstack');
Route::get('/frontend',[HomeController::class,'frontend'])->name('home.frontend');
Route::get('/DevOps',[HomeController::class,'DevOps'])->name('home.DevOps');
Route::get('/deepLearn',[HomeController::class,'deepLearn'])->name('home.deepLearn');
Route::get('/cyberSe',[HomeController::class,'cyberSe'])->name('home.cyberSe');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
Route::get('/about',[HomeController::class,'about'])->name('home.about');
Route::get('/backend',[HomeController::class,'backend'])->name('home.backend');
Route::get('/article',[HomeController::class,'article'])->name('home.article');
Route::get('/cloudComp',[HomeController::class,'cloudComp'])->name('home.cloudComp');



Route::get('/',[HomeController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}',[HomeController::class, 'show'])->name('posts.show');

//AuthController route
//register
Route::get('/register',[AuthController::class, 'register'])->name('register.get');
Route::post('/register',[AuthController::class, 'registerStor'])->name('register.post');

//login
Route::get('/login', [AuthController::class, 'login'])->name('login.get');
Route::post('/login', [AuthController::class, 'loginStor'])->name('login.post');

//logout

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//middleware route

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //user own post route
    Route::get('/dashboard/posts', [DashboardController::class, 'ownPost'])->name('dashboard.posts');

    Route::get('/dashboard/posts/create', [PostController::class, 'create'])->name('posts.create.get');
    Route::post('/dashboard/posts/create', [PostController::class, 'store'] )->name('posts.create.post');

    Route::get('/dashboard/posts/{id}/edit', [PostController::class, 'edit'])->name(('posts.edit.get'));

    //Route::put('/dashboard/posts/{post}', [PostController::class, 'update'])->name('posts.update.get');
    Route::patch('/dashboard/posts/{id}/edit', [PostController::class, 'update'])->name('posts.edit.post');

    Route::delete('/dashboard/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');

    //Route::post('/posts/{id}/comments', [CommentController::class, 'store'])->name('comments.store');

// dash board user profile route
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::patch('/profile/picture', [UserController::class, 'profilePicture'])->name('profile.picture');
    Route::get('/profile/update', [UserController::class, 'editBio'])->name('profile.editBio');
    Route::patch('/profile/update', [UserController::class, 'bioUpdate'])->name('profile.bioUpdate');

});


//category route
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin/dashboard/categories', [CategoryController::class, 'show'])->name('categories.show');
    
    Route::get('/admin/dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create.get');
    Route::post('/admin/dashboard/categories/create', [CategoryController::class, 'store'])->name('categories.create.post');
    
    Route::get('/admin/dashboard/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit.get');
    Route::patch('/admin/dashboard/categories/{id}/edit', [CategoryController::class, 'update'])->name('categories.edit.post');
   
    Route::delete('/admin/dashboard/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');

    
    Route::get('/admin/users', [UserController::class, 'users'])->name('admin.users');
});