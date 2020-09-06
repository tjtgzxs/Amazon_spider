<?php
use NoahBuscher\Macaw\Macaw;
Macaw::get('/','App\Controllers\SpiderController@home');


Macaw::dispatch();