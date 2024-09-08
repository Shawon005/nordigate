<?php
use App\Http\Controllers as Admin;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
Route::resource('auth', ADMIN\AuthController::class);
Route::get('/',[ADMIN\AuthController::class, 'index'])->name('login');
Route::get('/dashboard',[ADMIN\AuthController::class, 'create'])->name('dashbord');
Route::get('/logout',[ADMIN\AuthController::class, 'logout'])->name('logout');
Route::resource('slider', ADMIN\SliderController::class);
Route::get('SliderStatusById/{id}',[ADMIN\SliderController::class, 'Status']);
Route::get('slider/destroy/{id}',[ADMIN\SliderController::class, 'destroy'])->name('slider.delete');
Route::resource('setting', ADMIN\SettingController::class);

Route::resource('service', ADMIN\ServiceController::class);
Route::get('ServiceStatusById/{id}',[ADMIN\ServiceController::class, 'Status']);
Route::get('service/destroy/{id}',[ADMIN\ServiceController::class, 'destroy'])->name('service.delete');

Route::resource('service_up', ADMIN\ServiceUpController::class);
Route::get('ServicUpStatusById/{id}',[ADMIN\ServiceUpController::class, 'Status']);
Route::get('services/destroy/{id}',[ADMIN\ServiceUpController::class, 'destroy'])->name('service_up.delete');

Route::post('reviews/store',[ADMIN\ReviewController::class, 'store'])->name('reviews.store');
Route::resource('review', ADMIN\ReviewController::class);
Route::get('admin/review/{id}',[ADMIN\ReviewController::class, 'destroy'])->name('review.delete');

Route::resource('process', ADMIN\ProcessController::class);
Route::get('ProcessStatusById/{id}',[ADMIN\ProcessController::class, 'Status']);
Route::get('process/destroy/{id}',[ADMIN\ProcessController::class, 'destroy'])->name('process.delete');

Route::resource('slider_box', ADMIN\SliderBoxController::class);
Route::get('SliderBoxStatusById/{id}',[ADMIN\SliderBoxController::class, 'Status']);
Route::get('slider_box/destroy/{id}',[ADMIN\SliderBoxController::class, 'destroy'])->name('slider_box.delete');

Route::resource('technology', ADMIN\TechnologyController::class);
Route::get('TechnologyStatusById/{id}',[ADMIN\TechnologyController::class, 'Status']);
Route::get('technology/destroy/{id}',[ADMIN\TechnologyController::class, 'destroy'])->name('technology.delete');

Route::resource('testimonial', ADMIN\TestimonialController::class);
Route::get('TestimonialStatusById/{id}',[ADMIN\TestimonialController::class, 'Status']);
Route::get('testimonial/destroy/{id}',[ADMIN\TestimonialController::class, 'destroy'])->name('testimonial.delete');

Route::resource('project_category', ADMIN\ProjectCategoryController::class);
Route::get('ProjectCategoryStatusById/{id}',[ADMIN\ProjectCategoryController::class, 'Status']);
Route::get('project_category/destroy/{id}',[ADMIN\ProjectCategoryController::class, 'destroy'])->name('project_category.delete');

Route::resource('project', ADMIN\ProjectController::class);
Route::get('ProjectStatusById/{id}',[ADMIN\ProjectController::class, 'Status']);
Route::get('project/destroy/{id}',[ADMIN\ProjectController::class, 'destroy'])->name('project.delete');
});

Route::get('/',[ADMIN\HomePageController::class, 'index'])->name('home');
Route::get('/service',[ADMIN\HomePageController::class, 'services'])->name('services');
Route::get('/service-details/{slug}',[ADMIN\HomePageController::class, 'service_details'])->name('service-details');

Route::get('/projects',[ADMIN\HomePageController::class, 'projects'])->name('projects');
Route::get('/project-details/{id}',[ADMIN\HomePageController::class, 'project_details'])->name('project-details');
// Route::get('/', function () {
//     return view('frontend.index');
// })->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
Route::get('/blog-details', function () {
    return view('frontend.blog-detail');
})->name('blog-details');
// Route::get('/service', function () {
//     return view('frontend.services');
// })->name('services');
// Route::get('/service-details', function () {
//     return view('frontend.service-detail');
// })->name('service-details');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/product', function () {
    return view('frontend.products');
})->name('product');
Route::get('/product-details', function () {
    return view('frontend.project-detail');
})->name('product-details');
Route::get('/project', function () {
    return view('frontend.project');
})->name('project');
Route::get('/industries', function () {
    return view('frontend.industries');
})->name('industries');

