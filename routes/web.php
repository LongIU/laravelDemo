<?php

use App\Http\Controllers\InspiringController;
use App\Models\Post;
use App\Models\Subject;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello_world', function () {
    return view('hello_world');
});


Route::get('/about_us', function () {
    return view('layouts.about_us', ['name' => 'Laravel 範例']);
});


//8版預設不會帶入username前綴，所以使用'InspiringController@inspire'會是噴錯
Route::get('/inspire', [InspiringController::class, 'inspire']);



/*
//練習多對多關聯
Route::get('/test', function () {
    $tags = Tag::find(3);
    $posts = $tags->posts;
    return $posts;
});

Route::get('/test2', function () {
    $posts = App\Models\Post::find(1);
    $tags = $posts->tags;
    return $tags;

});

*/

/*
//學習一對多關聯(注意id資料必須要存在)
Route::get('/test', function () {
    $subject = Subject::find(1);
    $posts = $subject->posts;
    return $posts;
});

Route::get('/test2', function () {
    $posts = App\Models\Post::find(6);
    $subject = $posts->subject;
    return $subject;
});
*/

/*
//練習存取DB
Route::get('/test', function () {
    // return App\Models\Post::find(1);
    //$post = App\Models\Post::find(1);
    //$post->content = 'Laravel demo save';
    //$post->save();
    //return $post;

    $posts = App\Models\Post::all();
    $posts->each->update([
        'content' => 'Laravel demo update'
    ]);
    $post = $posts->map(function($item){
        return $item->content;
    });

    return $post;
});


Route::get('/test2', function () {
    $post = new App\Models\Post;
    $post->content = 'Laravel demo add';
    $post->save();
    return $post;
});

//搜尋id=1 並刪除
Route::get('/test3', function () {
    $post = App\Models\Post::find(1);
    $post->delete();
    return App\Models\Post::all();
});

//多筆刪除
Route::get('/test4', function () {
    $post = App\Models\Post::destroy([2,4]);
    return $post;

});



Route::get('/sub', function () {
    $post = new App\Models\Subject;
    $post->name = '南洲';
    $post->save();
    return $post;
});


Route::get('/sub2', function () {
    $post = App\Models\Subject::find(2);
    return $post;
});

Route::get('/sub3', function () {
    $post = App\Models\Subject::all();
    return $post;
});

Route::get('/sub4', function () {
    $post = App\Models\Subject::find(1);
    $post->delete();

    return App\Models\Subject::all();
});

Route::get('/sub5', function () {
    $post = App\Models\Subject::all();
    $post->each->update([
        'name' => 'stitch'
    ]);
    return $post;
});
*/

/*
//用 get_class() 這個函式來看看 Laravel 取得的物件類別
Route::get('/test2', function () {
    return get_class(Post::all()) . '========' . get_class(Post::cursor());
});


Route::get('/test', function () {
    // 範例yield用法
    // function getLargeData()
    // {
    //     // $returnData = [];
    //     for ($index = 0;$index <= 10000; $index++){
    //         // $returnData[] = $index;
    //         yield $index;
    //     }
    //     // return $returnData;
    // }

    // $largeDataRows = getLargeData();
    // echo get_class($largeDataRows) . "<br />";
    // foreach($largeDataRows as $row){
    //     echo $row . "<br />";
    // }

    //練習 LazyCollection (Illuminate\Support\LazyCollection)
    //
    return Post::cursor()->filter(function ($post) {
        return $post->id > 9500;
    });
});
*/
