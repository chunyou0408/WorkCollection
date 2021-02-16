<?php

use Illuminate\Support\Facades\Auth;
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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {

    // return view('welcome');

    return redirect('/01-layout');
});


//首頁-個人作品集頁面-切版相關
Route::prefix('/01-layout')->group(function () {
    Route::get('/', function () {
        return view('front.01-layout.01-layout');
    });

    //01-float
    Route::prefix('/float')->group(function () {

        Route::get('/', function () {
            return view('front.01-layout.01-float.00_float');
        });
        Route::get('/01', function () {
            return view('front.01-layout.01-float.01_float');
        });
        Route::get('/02', function () {
            return view('front.01-layout.01-float.02_float');
        });
        Route::get('/03', function () {
            return view('front.01-layout.01-float.03_float');
        });
        Route::get('/04', function () {
            return view('front.01-layout.01-float.04_float');
        });
        Route::get('/05', function () {
            return view('front.01-layout.01-float.05_float');
        });
    });



    //02-position
    Route::prefix('/position')->group(function () {
        Route::get('/', function () {
            return view('front.01-layout.02-position.00_position');
        });
        Route::get('/01', function () {
            return view('front.01-layout.02-position.01_position');
        });
        Route::get('/02', function () {
            return view('front.01-layout.02-position.02_position');
        });
        Route::get('/03', function () {
            return view('front.01-layout.02-position.03_position');
        });
        Route::get('/04', function () {
            return view('front.01-layout.02-position.04_position');
        });
        Route::get('/05', function () {
            return view('front.01-layout.02-position.05_position');
        });
        Route::get('/06', function () {
            return view('front.01-layout.02-position.06_position');
        });
        Route::get('/07', function () {
            return view('front.01-layout.02-position.07_position');
        });
        Route::get('/08', function () {
            return view('front.01-layout.02-position.08_position');
        });
    });

    //03-parallax
    Route::get('/parallax', function () {
        return view('front.01-layout.03-parallax.00-parallax');
    });

    //04-RWD
    Route::get('/RWD', function () {
        return view('front.01-layout.04-RWD.00-RWD');
    });

    //05-facebook
    Route::get('/facebook', function () {
        return view('front.01-layout.05-facebook.00-facebook');
    });

    //06-microsoft
    Route::get('/microsoft', function () {
        return view('front.01-layout.06-microsoft.00-microsoft');
    });
});


//JavaScript相關
Route::prefix('/02-JavaScript')->group(function () {
    Route::get('/', function () {
        return view('front.02-JavaScript.02-JavaScript');
    });
    //01-猜數字遊戲 0~100
    Route::get('/guess_number_higher_or_lower', function () {
        return view('front.02-JavaScript.01-guess_number_higher_or_lower.guess_number_higher_or_lower');
    });
    //02-猜數字遊戲 ?A?B
    Route::get('/bulls_and_cows', function () {
        return view('front.02-JavaScript.02-bulls_and_cows.bulls_and_cows');
    });
    //03-BMI計算機
    Route::get('/BMI', function () {
        return view('front.02-JavaScript.03-BMI.BMI');
    });
    //04-Tabs分頁
    Route::get('/tabs', function () {
        return view('front.02-JavaScript.04-Tabs.Tabs');
    });
    //05-食物選擇器
    Route::get('/foodstuff', function () {
        return view('front.02-JavaScript.05-foodstuff.foodstuff');
    });
    //06-家具選擇器
    Route::get('/furniture', function () {
        return view('front.02-JavaScript.06-furniture.furniture');
    });
    //07-天氣api
    Route::get('/weatherAPI', function () {
        return view('front.02-JavaScript.07-weatherAPI.weatherAPI');
    });
    //08-Bootstrap排版練習
    Route::get('/Bootstrap', function () {
        return view('front.02-JavaScript.08-Bootstrap.Bootstrap');
    });
});

//實務經驗
Route::prefix('/03-work')->group(function () {
    Route::get('/', function () {
        return view('front.03-work.03-work');
    });
    Route::get('01-inquire', function () {
        return view('front.03-work.01-inquire.04-inquire');
    });
    Route::get('02-common_problem', function () {
        return view('front.03-work.02-common_problem.05-common_problem');
    });
    Route::get('03-contact_us', function () {
        return view('front.03-work.03-contact_us.06-contact_us');
    });
});
