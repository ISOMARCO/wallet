<?php

Route::show404('Home/s404');
Route::change('Webhook/handleWebhook')->method('post')->uri('Webhook');