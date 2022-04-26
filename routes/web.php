<?php

use Illuminate\Support\Facades\Route;
use EasyBanglaDate\Types\BnDateTime; //for Bangla Time

// BackendController   
 use   App\Http\Controllers\HomeController;
 use   App\Http\Controllers\Backend\CategoryController;
 use   App\Http\Controllers\Backend\SubCategoryController;
 use   App\Http\Controllers\Backend\districtController;
 use   App\Http\Controllers\Backend\SubdistrictController;
 use   App\Http\Controllers\Backend\PostController;
 use   App\Http\Controllers\Backend\SeosController;
 use   App\Http\Controllers\Backend\SocialsController;
 use   App\Http\Controllers\Backend\LiveTvController;
 use   App\Http\Controllers\Backend\ImportantWebsiteController;
 use   App\Http\Controllers\Backend\PhotoController;
 use   App\Http\Controllers\Backend\LangController;
  use  App\Http\Controllers\Forntend\IndexController;
    

//end BackendController


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {

// $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
//     return view('frontend.home',compact('bongabda'));
// });
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/index', [IndexController::class, 'home'])->name('mainindex');
Route::get('/singlecat/{id}', [IndexController::class, 'singlecat'])->name('singlecat');
Route::get('/single/{id}', [IndexController::class, 'single'])->name('single');
Route::get('shownews/{id}', [IndexController::class, 'shownews'])->name('shownews');
Route::group(['middleware' => 'prevent-back-history'],function(){
// ...........backend..........
// Route::get('/', function () {
//     return view('backend.layouts.app');
// });

//Route::get('/home', [IndexController::class, 'index'])->name('home');
// Category Routes  
Route::get('categories',[CategoryController::class, 'index'])->name('categories');
Route::post('store/categories',[CategoryController::class,'store'])->name('store.category');
Route::get('delete/category/{id}',[CategoryController::class, 'destroy'])->name('delete.category');
Route::get('update/category/{id}',[CategoryController::class, 'update']);
Route::post('update/category/{id}',[CategoryController::class, 'up'])->name('update.category');
// subcategory
           
Route::get('subcategories',[SubCategoryController::class, 'index'])->name('subcategories');

Route::post('store/subcategories',[SubCategoryController::class, 'store'])->name('store.subcategory');
Route::get('delete/subcategory/{id}',[SubCategoryController::class, 'destroy'])->name('delete.subcategory');
Route::get('update/subcategory/{id}',[SubCategoryController::class, 'update']);
Route::post('update/subcategory/{id}',[SubCategoryController::class, 'up'])->name('update.subcategory');
              
//District Routes  
 Route::get('districts',[districtController::class, 'index'])->name('districts');
Route::post('store/distric', [districtController::class, 'store'])->name('store.district');
 Route::get('delete/district/{id}',[districtController::class, 'destroy'])->name('delete.district');
 Route::get('update/district/{id}',[districtController::class, 'update']);
 Route::post('update/district/{id}',[districtController::class, 'up'])->name('update.district');

                 
 //subDistrict

 Route::get('subdistricts',[SubdistrictController::class,'index'])->name('subdistricts');

 Route::post('store/subdistrict',[SubdistrictController::class,'store'])->name('store.subdistrict');
 Route::get('delete/subdistrict/{id}',[SubdistrictController::class,'destroy'])->name('delete.subdistrict');
 Route::get('update/subdistrict/{id}',[SubdistrictController::class, 'update']);
 Route::post('update/subdistrict/{id}',[SubdistrictController::class, 'up'])->name('update.subdistrict');
                   
 
 //post
 Route::get('insert/post',[PostController::class, 'create'])->name('insert.post'); 
 Route::post('store/post',[PostController::class, 'store'])->name('store.post');
 Route::get('all/post', [PostController::class, 'index'])->name('all.post');
 Route::get('edit/post/{id}', [PostController::class, 'edit']);
 Route::get('delete/post/{id}',[PostController::class, 'destroy'])->name('delete.post'); 
 Route::post('update/post/{id}',[PostController::class, 'update'])->name('update.post');
                          
 //jason multi data

Route::get('/get/subcat/{cat_id}',[PostController::class,'GetSubcat']);
Route::get('/get/subdist/{dist_id}',[PostController::class, 'GetSubdist']);
                    
//seo setting
Route::get('seo/setting',[SeosController::class, 'index'])->name('seo.setting'); 
Route::post('update/seo/{id}',[SeosController::class, 'update'])->name('update.seo');
//social setting
Route::get('social/setting',[SocialsController::class, 'index'])->name('social.setting'); 
Route::post('update/social/{id}', [SocialsController::class, 'update'])->name('update.social');
//namaz                     
Route::get('namaz/setting', [SocialsController::class, 'index'])->name('namaz.setting'); 
Route::post('update/namaz/{id}',[SocialsController::class, 'update'])->name('update.namaz');

                 
// //tv.setting
Route::get('tv/setting',[LiveTvController::class, 'index'])->name('tv.setting'); 
Route::post('update/tv/{id}',[LiveTvController::class, 'update'])->name('update.tv');
Route::get('active/tv/{id}',[LiveTvController::class, 'active'])->name('active.tv'); 
Route::get('deactive/tv/{id}', [LiveTvController::class, 'deactive'])->name('deactive.tv'); 
                            
// //notice.setting
Route::get('notice/setting',[LiveTvController::class, 'index'])->name('notice.setting'); 
Route::post('update/notice/{id}', [LiveTvController::class, 'update'])->name('update.notice');
Route::get('active/notice/{id}',[LiveTvController::class, 'active'])->name('active.notice'); 
Route::get('deactive/notice/{id}',[LiveTvController::class, 'deactive'])->name('deactive.notice'); 
                                       
// //important website important.website
Route::get('important/website',[ImportantWebsiteController::class, 'index'])->name('important.website'); 
Route::post('store/website',[ImportantWebsiteController::class, 'store'])->name('store.website');
Route::get('delete/website/{id}',[ImportantWebsiteController::class, 'destroy'])->name('delete.website');
Route::get('edit/website/{id}',[ImportantWebsiteController::class, 'edit']);
Route::post('update/website/{id}', [ImportantWebsiteController::class, 'update'])->name('update.website');
// //photo.gallery               
 Route::get('photo/gallery',[PhotoController::class, 'index'])->name('photo.gallery'); 
Route::post('store/photo',[PhotoController::class, 'store'])->name('store.photo');
Route::get('all/post',[PhotoController::class, 'index'])->name('all.post');
Route::get('edit/photo/{id}',[PhotoController::class,'edit']);
Route::get('delete/photo/{id}',[PhotoController::class, 'destroy'])->name('delete.photo'); 
Route::post('update/photo/{id}', [PhotoController::class, 'update'])->name('update.photo');
                                         
//   //photo.gallery
Route::get('photo/gallery',[PhotoController::class, 'index'])->name('photo.gallery'); 
Route::post('store/photo',[PhotoController::class, 'store'])->name('store.photo');
Route::get('all/post',[PhotoController::class,'index'])->name('all.post');
Route::get('edit/photo/{id}',[PhotoController::class,'edit']);
Route::get('delete/photo/{id}',[PhotoController::class,'destroy'])->name('delete.photo'); 
Route::post('update/photo/{id}',[PhotoController::class,'update'])->name('update.photo');
//  //Bangla English
//  Route::get('lang/english',[LangController::class, 'english'])->name('lang.english'); 
//  Route::get('lang/Bangla', [LangController::class, 'bangla'])->name('lang.bangla'); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('user.logout');

}); //prevent back middleware
