<?php

Route::show404('Home/s404');
#Route::change('webhook_demo.php')->uri('home');
Route::direct()->method('post')->uri('Webhook');