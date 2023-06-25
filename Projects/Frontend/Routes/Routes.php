<?php

Route::show404('Home/s404');
#Route::change('webhook_demo.php')->uri('home');
Route::method('post', 'get')->uri('Webhook');