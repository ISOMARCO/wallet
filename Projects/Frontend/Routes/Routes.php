<?php

Route::show404('Home/s404');
Route::method('post')->change(URL::base('webhook.php'))->uri('Webhook');