<?php

use App\Services\Contracts\VideoServiceInterface;
use Illuminate\Support\Facades\Route;


Route::get('/', function (VideoServiceInterface $video) {
    var_dump($video);
});
