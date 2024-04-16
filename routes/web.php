<?php

use Illuminate\Http\Request;


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


Route::get('/',  function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('index-chinise');
    }
    else{
        return view('index');
    }
    
});
Route::get('/about', function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('about-chinise');
    }
    else{
        return view('about');
    }

});

//chainese

Route::get('/webinar_registration_chinese', function () {
    return view('Webinar-signup');
});

// english
Route::get('/webinar_registration_english', function () {
    return view('Webinar-signup-english');
});

Route::get('/canada', function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('canada-chinise');
    }
    else{
        return view('canada');
    }

});

Route::get('/Services-express_entry', function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('Services-express_entry-chinise');
    }
    else{
        return view('Services-express_entry');
    }

});


Route::get('/Services-LMIA',function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('Services-LMIA-chinise');
    }
    else{
        return view('Services-LMIA');
    }

});


Route::get('/Services-PNP', function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('Services-PNP-chinise');
    }
    else{
        return view('Services-PNP');
    }

});


Route::get('/Services-startup_visa', function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('Services-startup_visa-chinise');
    }
    else{
        return view('Services-startup_visa');
    }

});



Route::get('/Services-workpermit', function (Request $request) {

    if ($request->get('language') == 'chinese'){
        return view('Services-workpermit-chinise');
    }
    else{
        return view('Services-workpermit');
    }

});

Route::get('/Services-studypermit', function (Request $request) {
    
    if ($request->get('language') == 'chinese'){
        return view('Services-studypermit-chinise');
    }
    else{
        return view('Services-studypermit');
        
    }

});

Route::get('/Services-visitorvisa', function (Request $request) {
    
    if ($request->get('language') == 'chinese'){
        return view('Services-visitorvisa-chinise');
    }
    else{
        return view('Services-visitorvisa');
        
    }

});

Route::get('/Services-family_sponsor',  function (Request $request) {
    
    if ($request->get('language') == 'chinese'){
        return view('Services-family_sponsor-chinise');
    }
    else{
        return view('Services-family_sponsor');
    }

});



Route::get('/Services-caregiver',  function (Request $request) {
    
    if ($request->get('language') == 'chinese'){
        return view('Services-caregiver-chinise');
    }
    else{
        return view('Services-caregiver');
    }

});



Route::get('/Services-prcard',function (Request $request) {
    
    if ($request->get('language') == 'chinese'){
        return view('Services-prcard-chinise');
    }
    else{
        return view('Services-prcard');
    }

});

Route::get('/Services-citizenship', function (Request $request) {
    
    if ($request->get('language') == 'chinese'){
        return view('Services-citizenship-chinise');
    }
    else{
        return view('Services-citizenship');
        
    }

});
Route::get('/Privacy-policy', function () {
    return view('Privacy-policy');
});Route::get('/Terms-and-conditions', function () {
    return view('Terms-and-conditions');
});

Route::post('/save-webinar-data', 'MailController@saveWebinarDetail');
Route::get('/News','BlogController@blogList');
Route::post('/News', 'BlogController@getBody');
Route::get('/News-details/{id}','BlogController@Blog')->name('blog-description');
Route::get('/News-category/{id}','BlogController@BlogCategory')->name('blog-category');

Route::get('/contactus',function (Request $request) {
    
    if ($request->get('language') == 'chinese'){
        return view('contact-chinise');
    }
    else{
        return view('contact');
        
        
    }

});

Route::post('/contact_mail', 'MailController@contactMail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin-login','AdminController@Login');
Route::post('/logout', 'Auth\LoginController@logout');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'web']], function () {
Route::get('/admin-blog-list','AdminController@blogList')->name('admin-blog-list');
Route::get('/add-blog', 'AdminController@loadAddblog');
Route::post('/add-blog', 'AdminController@insertBlog');
Route::get('/edit-blog/{id}', 'AdminController@editBlog');
Route::post('/edit-blog/{id}', 'AdminController@updateBlog')->name('blogUpdate');;
Route::get('/delete-blog/{id}', 'AdminController@deleteBlog');
Route::get('/admin-category-list','AdminController@categoryList')->name('admin-category-list');
Route::get('/add-category', 'AdminController@loadAddcategory');
Route::post('/add-category', 'AdminController@insertCategory');
Route::get('/edit-category/{id}', 'AdminController@editCategory');
Route::post('/edit-category/{id}', 'AdminController@updateCategory')->name('categoryUpdate');
Route::get('/delete-category/{id}', 'AdminController@deleteCategory');
Route::get('/admin-user-list','AdminController@userList')->name('admin-user-list');
Route::Resource('/upload','UploadController');
});





