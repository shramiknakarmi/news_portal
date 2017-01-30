<?php
use Illuminate\Http\Request;
use App\SubCategoryModel;
use GuzzleHttp\Client;

Auth::routes();
//common layouts Routes
Route::get('front',function (){
    return view('news-portal.users.front');
});
Route::get('/','NewsPortalController\Users\FrontEndController@getNews');
Route::get('/registration','NewsPortalController\NewsWriter\RegisterController@getRegisterForm');
Route::post('/registration','NewsPortalController\NewsWriter\RegisterController@postRegisterForm');




Route::get('/logout','NewsPortalController\NewsWriter\LoginController@doLogout');

Route::group(['middleware' => 'prevent-back-history'],function(){
});


Route::group(['middleware' => ['web']], function () {

    Route::get('/login','NewsPortalController\NewsWriter\LoginController@getLogin');
    Route::post('/login','NewsPortalController\NewsWriter\LoginController@postLogin');
});



//newswriter

Route::get('/dashboard',function (){
    return view('news-portal.newswriter.writer_dashboard');
});
Route::get('/category',function (){
    return view('news-portal.newswriter.create_category');
});
Route::get('/welcome',function (){
    return view('news-portal.commonlayouts.welcome');
});

Route::get('/admin_dashboard',function (){
    return view('news-portal.admin.admin_navbar');
});

//news CRUD
/*Route::patch('status/{id}','NewsPortalController\NewsWriter\NewsController@changeStatus')->name('status');*/
Route::resource('newsaction','NewsPortalController\NewsWriter\NewsController');

Route::get('news_list','NewsPortalController\Admin\AdminController@getNewsList')->name('news_list');
Route::patch('status/{id}','NewsPortalController\Admin\AdminController@changeStatus')->name('status');
Route::post('status/{id}','NewsPortalController\Admin\AdminController@changeStatus')->name('status');

//category CRUD
Route::resource('categories','NewsPortalController\NewsWriter\CategoryController',['except'=>['create']]);

//subcategory CRUD
Route::resource('subcategories','NewsPortalController\NewsWriter\SubCategoryController');

//Comment
Route::post('comment','NewsPortalController\Users\CommentController@store')->name('comment.store');
Route::group(['middleware' => ['auth']], function () {
    Route::get('comments_list','NewsPortalController\Users\CommentController@index')->name('comment_index');
    Route::patch('comment_status/{id}','NewsPortalController\Users\CommentController@changeCommentStatus')->name('comment_status');
});


Route::get('/ajax-subcat',function (Request $request){
    $cat_id=$request->get('cat_id');
    $subcats=SubCategoryModel::where('category_id', '=',$cat_id)->get();
    return Response::json($subcats);
});
//AJAX for Category and Subcategory
Route::get('ajax','NewsPortalController\NewsWriter\NewsController@ajax');





//user front


Route::post('search',array('as'=>'search','uses'=>'NewsPortalController\Users\FrontEndController@searchNews'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'NewsPortalController\Users\FrontEndController@autocomplete'));



 Route::get('user',function (){
     return view('news-portal.users.front');
 });

Route::get('mag',function (){
    return view('news-portal.users.mag');
});

Route::get('news/{id}','NewsPortalController\Users\FrontEndController@fetchSingle')->name('fetchSingle');

Route::get('email',function(){

   return view('news-portal.admin.email');
});
Route::any ( 'sendemail', function (Request $request) {
    if ($request->get ( 'message' ) != null)
        $data = array (
            'bodyMessage' => $request->get ( 'message' )
        );
    else

        $data [] = '';

    Mail::send ('news-portal.admin.sent', $data, function ($message) {


        $message->from ( 'donotreply@demo.com', 'Just Laravel' );
        $message->subject("Thanks for the Registration");

        $message->to ('twome06@gmail.com' )->subject ( 'Just Laravel demo email using SendGrid' );
    } );
    return Redirect::back ()->withErrors ( [
        'Your email has been sent successfully'
    ] );
} );

Route::get('managemail', function(){

    return view('news-portal.admin.mailchimp');
});

Route::post('subscribe',['as'=>'subscribe','uses'=>'NewsPortalController\Admin\MailChimpController@subscribe']);

Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'NewsPortalController\Admin\MailChimpController@sendCompaign']);






Route::get('time',function(){

   $date= new DateTime();
    dump($date);
});


use Illuminate\Support\Facades\App;

Route::get('/notifications', function() {

return view('news-portal.newswriter.notifiication');
});

Route::get('/profile',function(){
    return view('news-portal.admin.profile');
})->name('profile');

Route::get('/programming',function(){
    return view('news-portal.users.categorywise');
})->name('programming');




