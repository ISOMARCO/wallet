<?php

Route::show404('Home/s404');
Route::change('Webhook')->method('post')->uri('webhook.php');