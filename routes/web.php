<?php

use App\Http\Controllers\admin\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;


use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\SkillController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about', [HomePageController::class, 'about'])->name('about');
Route::get('/portfolio', [HomePageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
Route::post('contact/store', [HomePageController::class, 'store'])->name('contact.store');
Route::get('/blog', [HomePageController::class, 'blog'])->name('blog');
Route::get('/skills', [HomePageController::class, 'skills'])->name('skills');





Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin_Dashboard'])->name('admin.dashboard');
    Route::get('admin/logout', [AuthController::class, 'Logout'])->name('admin.logout');

    //  Home Paging listing Route start --------------------------------------------------------------------------------------------------------------
    Route::get('admin/home', [HomeController::class, 'admin_home'])->name('admin.home');
    Route::get('admin/home/create', [HomeController::class, 'create'])->name('admin.home.create');
    Route::post('admin/home/store', [HomeController::class, 'store'])->name('home.store');
    Route::get('admin/home/{home}/edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('admin/home/{home}/edit', [HomeController::class, 'update'])->name('home.update');
    Route::get('/delete-home/{id}', [HomeController::class, 'deleteHome'])->name('home.delete');
    //  Home Paging listing Route End --------------------------------------------------------------------------------------------------------------



    //  About Paging listing Route start --------------------------------------------------------------------------------------------------------------
    Route::get('admin/about', [AboutController::class, 'admin_about'])->name('admin.about');
    Route::get('admin/about/create', [AboutController::class, 'create'])->name('admin.about.create');
    Route::post('admin/about/store', [AboutController::class, 'store'])->name('admin.about.store');
    Route::get('admin/about/{about}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::put('admin/about/{about}/edit', [AboutController::class, 'update'])->name('admin.about.update');
    Route::get('/delete-about/{id}', [AboutController::class, 'deleteAbout'])->name('about.delete');
    //  About Paging listing Route End --------------------------------------------------------------------------------------------------------------

    //  Portfolio Paging listing Route start --------------------------------------------------------------------------------------------------------------
    Route::get('admin/portfolio', [PortfolioController::class, 'admin_portfolio'])->name('admin.portfolio');
    Route::get('admin/portfolio/create', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
    Route::post('admin/portfolio/store', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
    Route::get('admin/portfolio/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
    Route::put('admin/portfolio/{portfolio}/update', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
    Route::get('/delete-portfolio/{id}', [PortfolioController::class, 'deletePortfolio'])->name('portfolio.delete');
    //  Portfolio Paging listing Route End --------------------------------------------------------------------------------------------------------------
    //  Skills Paging listing Route start --------------------------------------------------------------------------------------------------------------
    Route::get('admin/skills', [SkillController::class, 'admin_skills'])->name('admin.skills');
    Route::get('admin/skills/create', [SkillController::class, 'create'])->name('admin.skills.create');
    Route::post('admin/skills/store', [SkillController::class, 'store'])->name('admin.skills.store');
    Route::get('admin/skills/{skills}/edit', [SkillController::class, 'edit'])->name('admin.skills.edit');
    Route::put('admin/skills/{skills}/update', [SkillController::class, 'update'])->name('admin.skills.update');
    Route::get('/delete-skills/{id}', [SkillController::class, 'deleteSkill'])->name('Skills.delete');


    //  Skills Paging listing Route End --------------------------------------------------------------------------------------------------------------


    Route::get('admin/contact', [DashboardController::class, 'admin_contact'])->name('admin.contact');
    Route::get('/delete-contact/{id}', [DashboardController::class, 'deleteContact'])->name('contact.delete');

    Route::get('admin/blog', [DashboardController::class, 'admin_blog'])->name('admin.blog');
});
Route::get('admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('login');
Route::get('/admin/forgot-password', [AuthController::class, 'ForgotPassword'])->name('admin.forgot-password');
Route::post('/admin/forgot-password', [AuthController::class, 'Forgot_Password'])->name('admin.forgot');
