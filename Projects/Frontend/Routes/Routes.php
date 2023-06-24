<?php

Route::show404('Home/s404');
Route::change(URL::base('webhook.php'))->uri('Webhook');